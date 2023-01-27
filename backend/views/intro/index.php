<?php

use common\models\Intro;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\IntroSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Intros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="intro-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Intro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'titleru:ntext',
            'titlekz:ntext',
            'titleen:ntext',
            'descriptionru:ntext',
            'descriptionkz:ntext',
            //'descriptionen:ntext',
            //'img:ntext',
            //'id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Intro $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
