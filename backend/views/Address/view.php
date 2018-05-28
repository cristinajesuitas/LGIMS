<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Address */

$this->title = $model->cap_citizen_id;
$this->params['breadcrumbs'][] = ['label' => 'Addresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="address-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cap_citizen_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cap_citizen_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cap_citizen_id',
            'HouseNo',
            'LotNo',
            'BlockNo',
            'UnitNo',
            'BldgName',
            'Street',
            'Purok',
            'Subdivision',
            'cap_barangay_id',
            'cap_municipal_id',
            'cap_province_id',
            'cap_region_id',
        ],
    ]) ?>

</div>
