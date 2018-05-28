<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\lgucategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lgucategory-index">

    <h1><center><?= Html::encode($this->title) ?><center></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add LGU Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'summary' => "{begin} of {end} ",
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
			['label'=>'Lgulevel','value'=>function ($model, $index, $dataColumn) { return $model->capLgulevel->name; }],
            //'id',
            //'cap_lgulevel_id',
            'name',
            'code',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update}'],
        ],
    ]); ?>
</div>
