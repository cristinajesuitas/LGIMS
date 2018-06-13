<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Relationship */

$this->title = 'add Relationship';
$this->params['breadcrumbs'][] = ['label' => 'Relationships', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relationship-create">

    <h1><center><?= Html::encode($this->title) ?></center></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
