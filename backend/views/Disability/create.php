<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Disability */
$this->params['breadcrumbs'][] = ['label' => 'Disability', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disability-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
