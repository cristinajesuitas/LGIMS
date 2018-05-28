<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Landclass */

$this->title = 'Add Land Class';
$this->params['breadcrumbs'][] = ['label' => 'Land Class', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="landclass-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
