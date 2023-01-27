<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\About $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descriptionru')->widget(\yii\redactor\widgets\Redactor::className())?>

    <?= $form->field($model, 'descriptionen')->widget(\yii\redactor\widgets\Redactor::className())?>

    <?= $form->field($model, 'descriptionkz')->widget(\yii\redactor\widgets\Redactor::className())?>

    <?= $form->field($model, 'iconImage')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
