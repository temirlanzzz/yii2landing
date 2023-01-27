<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\ExpertSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="expert-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nameru') ?>

    <?= $form->field($model, 'nameen') ?>

    <?= $form->field($model, 'namekz') ?>

    <?= $form->field($model, 'positionru') ?>

    <?php // echo $form->field($model, 'positionen') ?>

    <?php // echo $form->field($model, 'positionkz') ?>

    <?php // echo $form->field($model, 'img') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
