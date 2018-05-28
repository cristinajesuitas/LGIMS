<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Address */

$this->title = 'Update Address: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Addresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cap_citizen_id, 'url' => ['view', 'id' => $model->cap_citizen_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="address-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
