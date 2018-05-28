<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Lgulevel;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\lgudistrictSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lgudistrict-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add LGU District', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'summary' => "{begin} - {end}",
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

           // 'id',
            //'cap_lgulevel_id',
			['label'=>'LGU Level','value'=>function ($model, $index, $dataColumn) { return $model->capLgulevel->name; }],
            'name',
            'code',

            ['class' => 'yii\grid\ActionColumn','template' => '{view} {update}'],
        ],
    ]); ?>
</div>
