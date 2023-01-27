<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\TeamSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="team-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'text1ru') ?>

    <?= $form->field($model, 'text1en') ?>

    <?= $form->field($model, 'text1kz') ?>

    <?= $form->field($model, 'text2ru') ?>

    <?php // echo $form->field($model, 'text2en') ?>

    <?php // echo $form->field($model, 'text2kz') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
