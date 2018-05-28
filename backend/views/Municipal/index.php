<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Region;
use backend\models\Province;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MunicipalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="municipal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Municipal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'summary' => "{begin} of {end} ",
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            //'id',
			//'cap_region_id',
			['label'=>'Region','value'=>function ($model, $index, $dataColumn) { return $model->capRegion->name; }],
			//'cap_province_id',
			['label'=>'Province','value'=>function ($model, $index, $dataColumn) { return $model->capProvince->name; }],
            'name',
            'code',

            ['class' => 'yii\grid\ActionColumn','template' => '{view} {update}'],
			
        ],
    ]); ?>
</div>
