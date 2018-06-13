<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Workstatus */

$this->title = 'Update Workstatus: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Workstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="workstatus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
