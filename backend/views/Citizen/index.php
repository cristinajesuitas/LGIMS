<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CitizenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Citizens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citizen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Citizen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'fname',
            'mname',
            'lname',
            'bdate',
            //'cap_civilstatus_id',
            //'cap_disability_id',
            //'cap_citizenship_id',
            //'cap_ethnicity_id',
            //'cap_sex_id',
            //'cap_occupation_id',
            //'placeofbirth',
            //'address',
            //'number',
            //'rtohouholhead',
            //'name_subd_zone_sitio_purok',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
