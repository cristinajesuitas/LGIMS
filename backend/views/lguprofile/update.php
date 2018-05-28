<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Lguprofile */

$this->title = 'Update Lguprofile: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Lguprofiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lguprofile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
