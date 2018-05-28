<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\lguclass */


$this->params['breadcrumbs'][] = ['label' => 'Lgu Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lguclass-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
