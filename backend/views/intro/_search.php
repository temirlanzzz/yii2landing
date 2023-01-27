<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\IntroSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="intro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'titleru') ?>

    <?= $form->field($model, 'titlekz') ?>

    <?= $form->field($model, 'titleen') ?>

    <?= $form->field($model, 'descriptionru') ?>

    <?= $form->field($model, 'descriptionkz') ?>

    <?php // echo $form->field($model, 'descriptionen') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
