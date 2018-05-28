<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LgulevelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

// $this->title = 'Lgulevels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lgulevel-index">

   <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add LGU Level', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'summary' => "{begin} of {end}",
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'name',
            'code',

            ['class' => 'yii\grid\ActionColumn','template' => '{view} {update}'],
        ],
    ]); ?>
</div>
