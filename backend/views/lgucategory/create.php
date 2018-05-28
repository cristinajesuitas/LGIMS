<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Lgucategory */

$this->title = 'Create Lgucategory';
$this->params['breadcrumbs'][] = ['label' => 'LGU Category', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lgucategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
