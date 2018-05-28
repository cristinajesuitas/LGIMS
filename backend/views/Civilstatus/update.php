<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Civilstatus */

$this->title = 'Update Civilstatus: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Civilstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="civilstatus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
