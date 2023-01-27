<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Intro $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="intro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titleru')->widget(\yii\redactor\widgets\Redactor::className()) ?>

    <?= $form->field($model, 'titlekz')->widget(\yii\redactor\widgets\Redactor::className())?>

    <?= $form->field($model, 'titleen')->widget(\yii\redactor\widgets\Redactor::className())?>

    <?= $form->field($model, 'descriptionru')->widget(\yii\redactor\widgets\Redactor::className())?>

    <?= $form->field($model, 'descriptionkz')->widget(\yii\redactor\widgets\Redactor::className())?>

    <?= $form->field($model, 'descriptionen')->widget(\yii\redactor\widgets\Redactor::className())?>

    <?= $form->field($model, 'eventImage')->fileInput() ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
