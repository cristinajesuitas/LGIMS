<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Municipal */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Municipal', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="municipal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
			'cap_region_id',
            'cap_province_id',
            'name',
            'code',
        ],
    ]) ?>

</div>
