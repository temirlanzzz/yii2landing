<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\ServiceSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="service-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'icon') ?>

    <?= $form->field($model, 'titleru') ?>

    <?= $form->field($model, 'titleen') ?>

    <?= $form->field($model, 'titlekz') ?>

    <?php // echo $form->field($model, 'descriptionru') ?>

    <?php // echo $form->field($model, 'descriptionen') ?>

    <?php // echo $form->field($model, 'descriptionkz') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
