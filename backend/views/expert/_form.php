<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Expert $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="expert-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nameru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nameen')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'namekz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'positionru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'positionen')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'positionkz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'eventImage')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
