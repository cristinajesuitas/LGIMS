<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Civilstatus;
use backend\models\Disability;
use backend\models\Citizenship;
use backend\models\Ethnicity;
use backend\models\Sex;
use backend\models\Occupation;

/* @var $this yii\web\View */
/* @var $model backend\models\Citizen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="citizen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fname')->textInput(['style' => 'width:200px']) ?> 
	
	<?= $form->field($model, 'mname')->textInput(['style' => 'width:200px']) ?>

    <?= $form->field($model, 'lname')->textInput(['style' => 'width:200px']) ?>

    <?= $form->field($model, 'bdate')->textInput(['style' => 'width:200px']) ->hint('dd/mm/yyyy') ?>

    <?= $form->field($model, 'cap_civilstatus_id')->dropDownList( ArrayHelper::map(Civilstatus::find()->all(), 'id','name'), ['style' => 'width:200px'], ['prompt'=>'Choose Civil Status']) ?>

    <?= $form->field($model, 'cap_disability_id')->dropDownList( ArrayHelper::map(Disability::find()->all(), 'id','name'), ['style' => 'width:200px'], ['prompt'=>'Choose Disability']) ?>

    <?= $form->field($model, 'cap_citizenship_id')->dropDownList( ArrayHelper::map(Citizenship::find()->all(), 'ID','name'), ['style' => 'width:200px'], ['prompt'=>'Choose Citizenship']) ?>

    <?= $form->field($model, 'cap_ethnicity_id')->dropDownList( ArrayHelper::map(Ethnicity::find()->all(), 'ID','name'), ['style' => 'width:200px'], ['prompt'=>'Choose Ethnicity']) ?>

    <?= $form->field($model, 'cap_sex_id')->dropDownList( ArrayHelper::map(Sex::find()->all(), 'ID','name'), ['style' => 'width:200px'], ['prompt'=>'Choose Sex']) ?>

    <?= $form->field($model, 'cap_occupation_id')->dropDownList( ArrayHelper::map(Occupation::find()->all(), 'ID','name'), ['style' => 'width:200px'], ['prompt'=>'Choose Occupation']) ?>

    <?= $form->field($model, 'name')->textInput(['style' => 'width:200px']) ?>

    <?= $form->field($model, 'code')->textInput(['style' => 'width:200px']) ?>

    <div class="form-group">
    <center> <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?> </center>
    </div>

    <?php ActiveForm::end(); ?>

</div>
