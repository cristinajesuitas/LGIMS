<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LguclassSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// $this->title = 'Lguclasses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lguclass-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add LGU Class', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'summary' => "{begin} of {end} ",
        'columns' => [
          //  ['class' => 'yii\grid\SerialColumn'],
				['label'=>'Lgulevel','value'=>function ($model, $index, $dataColumn) { return $model->capLgulevel->name; }],
          //  'ID',
         //  'cap_lgulevel_id',
            'name',
            'code',

         ['class' => 'yii\grid\ActionColumn' , 'template' => '{view} ,{update}'],
        ],
    ]); ?>
</div>
