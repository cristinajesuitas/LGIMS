<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Citizen */

//$this->title = 'Create Citizen';
$this->params['breadcrumbs'][] = ['label' => 'Citizens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citizen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model1' => $model1,
        'model2' => $model2,
       
    ]) ?>

</div>
