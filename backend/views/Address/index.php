<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AddressSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Addresses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="address-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Address', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cap_citizen_id',
            'HouseNo',
            'LotNo',
            'BlockNo',
            'UnitNo',
            //'BldgName',
            //'Street',
            //'Purok',
            //'Subdivision',
            //'cap_barangay_id',
            //'cap_municipal_id',
            //'cap_province_id',
            //'cap_region_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
