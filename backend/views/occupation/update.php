<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Occupation */

$this->title = 'Update Occupation: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Occupation', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="occupation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>