<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ethnicity */

$this->title = 'Update Ethnicity: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ethnicities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ethnicity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
