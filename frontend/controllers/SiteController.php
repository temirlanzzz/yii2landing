<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\Intro;
use common\models\Service;
use common\models\Team;
use common\models\Expert;
use common\models\Partners;
use common\models\About;
use common\models\Request;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex($lang = 'ru')
    {
        $intromodel = Intro::find()->where(['id'=>1])->one();
        $servicemodels = Service::find()->all();
        $teammodels = Team::find()->all();
        $expertmodels = Expert::find()->all();
        $partnersmodels = Partners::find()->all();
        $aboutmodel = About::find()->where(['id'=>1])->one();
        $requestmodel = new Request();
        if ($this->request->isPost) {
            if ($requestmodel->load($this->request->post()) && $requestmodel->save()) {
                return $this->redirect(['index']);
            }
        }
        $teamtext1 = [];
        $teamtext2 = [];
        $expertnames = [];
        $expertpositions = [];
        $expertimages = [];
        $teamtext2index = [];
        $servicetitles = [];
        $servicedescriptions = [];
        $serviceicons = [];
        if($lang == 'en'){
            $introtitle = $intromodel->titleen;
            $introdescription = $intromodel->descriptionen;
            $aboutdescription = $aboutmodel->descriptionen;
            foreach ($servicemodels as $servicemodel){
                array_push($servicetitles, $servicemodel->titleen);
                array_push($servicedescriptions, $servicemodel->descriptionen);
                array_push($serviceicons, $servicemodel->icon);
            }
            foreach ($expertmodels as $expertmodel){
                array_push($expertnames, $expertmodel->nameen);
                array_push($expertpositions, $expertmodel->positionen);
                array_push($expertimages, $expertmodel->img);
            }
            $teamindex = 0;
            foreach ($teammodels as $teammodel){
                array_push($teamtext1, $teammodel->text1en);
                if($teammodel->text2en != NULL){
                    array_push($teamtext2, $teammodel->text2en);
                    array_push($teamtext2index, $teamindex);
                }
                $teamindex++;
            }
        }else if($lang == 'kz'){
            $introtitle = $intromodel->titlekz;
            $introdescription = $intromodel->descriptionkz;
            $aboutdescription = $aboutmodel->descriptionkz;
            foreach ($servicemodels as $servicemodel){
                array_push($servicetitles, $servicemodel->titlekz);
                array_push($servicedescriptions, $servicemodel->descriptionkz);
                array_push($serviceicons, $servicemodel->icon);
            }
            foreach ($expertmodels as $expertmodel){
                array_push($expertnames, $expertmodel->namekz);
                array_push($expertpositions, $expertmodel->positionkz);
                array_push($expertimages, $expertmodel->img);
            }
            $teamindex = 0;
            foreach ($teammodels as $teammodel){
                array_push($teamtext1, $teammodel->text1kz);
                if($teammodel->text2kz != NULL){
                    array_push($teamtext2, $teammodel->text2kz);
                    array_push($teamtext2index, $teamindex);
                }
                $teamindex++;
            }
        }else{
            $introtitle = $intromodel->titleru;
            $introdescription = $intromodel->descriptionru;
            $aboutdescription = $aboutmodel->descriptionru;
            foreach ($servicemodels as $servicemodel){
                array_push($servicetitles, $servicemodel->titleru);
                array_push($servicedescriptions, $servicemodel->descriptionru);
                array_push($serviceicons, $servicemodel->icon);
            }
            foreach ($expertmodels as $expertmodel){
                array_push($expertnames, $expertmodel->nameru);
                array_push($expertpositions, $expertmodel->positionru);
                array_push($expertimages, $expertmodel->img);
            }
            $teamindex = 0;
            foreach ($teammodels as $teammodel){
                array_push($teamtext1, $teammodel->text1ru);
                if($teammodel->text2ru != NULL){
                    array_push($teamtext2, $teammodel->text2ru);
                    array_push($teamtext2index, $teamindex);
                }
                $teamindex++;
            }
        }
        
        return $this->render('index',[
            'lang' => $lang,
            'introtitle' => $introtitle,
            'introdescription' => $introdescription,
            'servicetitles' => $servicetitles,
            'servicedescriptions' => $servicedescriptions,
            'serviceicons' => $serviceicons,
            'aboutdescription' => $aboutdescription,
            'teamtext1' => $teamtext1,
            'teamtext2' => $teamtext2,
            'teamtext2index' => $teamtext2index,
            'expertnames' => $expertnames,
            'expertpositions' => $expertpositions,
            'expertimages' => $expertimages,
            'aboutimg' => $aboutmodel->img,
            'introimg' => $intromodel->img,
            'partnersmodels' => $partnersmodels,
            'requestmodel' => $requestmodel,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            }

            Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if (($user = $model->verifyEmail()) && Yii::$app->user->login($user)) {
            Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
            return $this->goHome();
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
