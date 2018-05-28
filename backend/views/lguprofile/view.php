<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Lguprofile */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Lguprofiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lguprofile-view">

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
        'model' => $model,
        'attributes' => [
            'Id',
			'LGU Name',
			'LGU Category',
			'LGU District',
			'Religion',
			'Ethnicity',
			'Citizenship',
			'LGU Level',
            'Name',
            'Website',
            'Total Barangay',
            'Land Area',
            'Zip Code',
        ],
    ]) ?>

</div>
