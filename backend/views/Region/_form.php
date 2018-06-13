<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Region;

/* @var $this yii\web\View */
/* @var $model backend\models\Region */
/* @var $form yii\widgets\ActiveForm */

$region = new Region();
?>

<div class="region-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($region, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($region, 'code')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($region->isNewRecord ? 'Create' : 'Update', ['class' => $region->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
