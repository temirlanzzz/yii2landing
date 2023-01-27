<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Team $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="team-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text1ru')->textarea(['rows' => 6])?>

    <?= $form->field($model, 'text1en')->textarea(['rows' => 6])?>

    <?= $form->field($model, 'text1kz')->textarea(['rows' => 6])?>

    <?= $form->field($model, 'text2ru')->textarea(['rows' => 6])?>

    <?= $form->field($model, 'text2en')->textarea(['rows' => 6])?>

    <?= $form->field($model, 'text2kz')->textarea(['rows' => 6])?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
