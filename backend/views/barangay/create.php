<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Barangay */

$this->params['breadcrumbs'][] = ['label' => 'Barangays','Region','Municipal','Province', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangay-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
