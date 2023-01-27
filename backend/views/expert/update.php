<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Expert $model */

$this->title = 'Update Expert: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Experts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="expert-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
