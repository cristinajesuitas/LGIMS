<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Citizen */

$this->title = 'Update Citizen: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Citizens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="citizen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		
    ]) ?>

</div>
