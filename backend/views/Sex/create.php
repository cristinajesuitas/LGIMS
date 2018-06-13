<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Sex */
$this->params['breadcrumbs'][] = ['label' => 'Sex', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sex-create">

    <h1><center><?= Html::encode($this->title) ?></center></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
