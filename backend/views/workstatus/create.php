<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Workstatus */

$this->title = 'Create Workstatus';
$this->params['breadcrumbs'][] = ['label' => 'Workstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="workstatus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
