<?php

use yii\helpers\Html;

/* @var $form yii\widgets\ActiveForm */

	
/* @var $this yii\web\View */
/* @var $model backend\models\Municipal */

$this->params['breadcrumbs'][] = ['label' => 'Municipal', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="municipal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
