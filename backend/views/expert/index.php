<?php

use common\models\Expert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\ExpertSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Experts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="expert-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Expert', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nameru:ntext',
            'nameen:ntext',
            'namekz:ntext',
            'positionru:ntext',
            //'positionen:ntext',
            //'positionkz:ntext',
            //'img:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Expert $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
