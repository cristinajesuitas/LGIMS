<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Ethnicity */
$this->params['breadcrumbs'][] = ['label' => 'Ethnicities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ethnicity-create">

    <h1><center><?= Html::encode($this->title) ?></center></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
