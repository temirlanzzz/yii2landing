<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Intro $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Intros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="intro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'titleru:ntext',
            'titlekz:ntext',
            'titleen:ntext',
            'descriptionru:ntext',
            'descriptionkz:ntext',
            'descriptionen:ntext',
            'img:ntext',
            'id',
        ],
    ]) ?>

</div>
