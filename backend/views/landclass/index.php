<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Lgulevel;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\landclassSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="landclass-index">

 
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Land Class', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'summary' => "{begin} of {end}",
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

           //'LGU Level',
		   //'cap_lgulevel_ID',
		   		   ['label'=>'LGU Level','value'=>function ($model, $index, $dataColumn) { return $model->capLgulevel->name; }],
            'name',
            'code',

          ['class' => 'yii\grid\ActionColumn', 'template'=> '{view} {update}'],
        ],
    ]); ?>
</div>
