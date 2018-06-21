<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Citizen */

$this->title = $model1->id;
$this->params['breadcrumbs'][] = ['label' => 'Citizens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citizen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model1' => $model1,
        'attributes' => [
            'id',
            'fname',
            'mname',
            'lname',
            'bdate',
            'cap_civilstatus_id',
            'cap_disability_id',
            'cap_citizenship_id',
            'cap_ethnicity_id',
            'cap_sex_id',
            'cap_occupation_id',
            'cap_religion_id',
            'Address',
            'number',
            'rtohouholhead',
            'name_subd_zone_sitio_purok',
        ],
    ]) ?>

</div>
