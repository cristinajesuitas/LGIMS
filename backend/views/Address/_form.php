<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Address */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="address-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cap_citizen_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HouseNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LotNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BlockNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UnitNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BldgName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Purok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Subdivision')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cap_barangay_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cap_municipal_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cap_province_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cap_region_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
