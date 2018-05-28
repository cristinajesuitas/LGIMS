<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CivilstatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="civilstatus-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(' Add Civil Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'summary' => "{begin} - {end}",
        'columns' => [
            /*['class' => 'yii\grid\SerialColumn'],

            'id',*/
            'name',
            'code',

            ['class' => 'yii\grid\ActionColumn','template' => '{view} {update}'],
        ],
    ]); ?>
</div>
