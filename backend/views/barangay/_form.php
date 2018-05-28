<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Region;
use backend\models\Province;
use backend\models\Municipal;


/* @var $this yii\web\View */
/* @var $model backend\models\Barangay */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barangay-form">

    <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model, 'cap_region_id')->dropDownList( ArrayHelper::map(Region::find()->all(), 'id','name'),['prompt'=>'Choose Region']) ?>

    <?= $form->field($model, 'cap_province_id')->dropDownList( ArrayHelper::map(Province::find()->all(), 'id','name'),['prompt'=>'Choose Province']) ?>

   <?= $form->field($model, 'cap_municipal_id')->dropDownList( ArrayHelper::map(Municipal::find()->all(), 'id','name'),['prompt'=>'Choose Municipal']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
