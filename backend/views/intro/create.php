<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Intro $model */

$this->title = 'Create Intro';
$this->params['breadcrumbs'][] = ['label' => 'Intros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="intro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
