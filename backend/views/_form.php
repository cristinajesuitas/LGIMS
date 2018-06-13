<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Civilstatus;
use backend\models\Disability;
use backend\models\Citizenship;
use backend\models\Ethnicity;
use backend\models\Barangay;
use backend\models\Municipal;
use backend\models\Address;
use backend\models\Sex;
use backend\models\Occupation;
use backend\models\Citizen;
use backend\models\Region;
use backend\models\Province;

/* @var $this yii\web\View */
/* @var $model backend\models\Citizen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="citizen-form" = style="font-family: Verdana; margin-top: 100px; margin-bottom: 200px; margin-right: 20px; margin-left: 20px; background-color: lightblue; border-radius: 20px;">

    <?php $form = ActiveForm::begin(); ?>

<div class="forms" = style="font-family: Verdana; margin-top: 100px; margin-bottom: 200px; margin-right: 20px; margin-left: 20px;">
	<hr>
	<h1><center>PERSONAL INFORMATION</center></h1>
	<hr>
<div class="row no-gutter">
    <div class="col-md-3"><?= $form->field($model, 'fname')->textInput(['style' => 'width:200px', 'placeholder' => "First" ]) ?></div>

    <div class="col-md-3"><?= $form->field($model, 'mname')->textInput(['style' => 'width:200px', 'placeholder' => "Middle"]) ?></div>

    <div class="col-md-3"><?= $form->field($model, 'lname')->textInput(['style' => 'width:200px', 'placeholder' => "Last"]) ?></div>

    <div class="col-md-3"><?= $form->field($model, 'bdate')->textInput(['style' => 'width:200px', 'placeholder' => "yyyy/mm/dd"]) ?> </div>
</div>

<div class="another row">
    <div class="col-md-3"><?= $form->field($model, 'cap_civilstatus_id')->dropDownList( ArrayHelper::map(Civilstatus::find()->all(), 'id','name'), ['prompt'=>'Choose Civil Status' , 'style' => 'width:200px']) ?> </div>

    <div class="col-md-3"><?= $form->field($model, 'cap_disability_id')->dropDownList( ArrayHelper::map(Disability::find()->all(), 'id','name'), ['prompt'=>'Choose Disability', 'style' => 'width:200px']) ?> </div>

    <div class="col-md-3"><?= $form->field($model, 'cap_citizenship_id')->dropDownList( ArrayHelper::map(Citizenship::find()->all(), 'ID','name'), ['prompt'=>'Choose Citizenship', 'style' => 'width:200px']) ?></div>

    <div class="col-md-3"><?= $form->field($model, 'cap_ethnicity_id')->dropDownList( ArrayHelper::map(Ethnicity::find()->all(), 'ID','name'), ['prompt'=>'Choose Ethnicity', 'style' => 'width:200px']) ?></div>

    <div class="col-md-3"><?= $form->field($model, 'cap_sex_id')->dropDownList( ArrayHelper::map(Sex::find()->all(), 'ID','name'), ['prompt'=>'Choose Sex', 'style' => 'width:200px']) ?></div>

    <div class="col-md-3"><?= $form->field($model, 'cap_occupation_id')->dropDownList( ArrayHelper::map(Occupation::find()->all(), 'ID','name'), ['prompt'=>'Choose Occupation', 'style' => 'width:200px']) ?></div>
	<div class="col-md-3"><?= $form->field($model, 'number')->textInput(['style' => 'width:200px']) ?></div>
	</div>
	<hr>
    <h1> Place of Birth  </h1>
<div class="PlaceofBirth">
    <div class="col-md-6"><?= $form->field($Barangay, 'cap_municipal_id')->dropDownList( ArrayHelper::map(Municipal::find()->all(), 'id','name'),['prompt'=>'Choose Municipal']) ?></div>

    <div class="col-md-6"><?= $form->field($Municipal, 'cap_province_id')->dropDownList( ArrayHelper::map(Province::find()->all(), 'id', 'name'),['prompt'=>'Choose Province']) ?></div>
<hr>
</div>
<font color="lightblue"> . </font>
<hr>
    <h1> Enter Address</h1>
<div class ="rowss">
     <div class="col-md-3"><?= $form->field($Address, 'HouseNo')->textInput(['maxlength' => true]) ?></div>

     <div class="col-md-3"><?= $form->field($Address, 'LotNo')->textInput(['maxlength' => true]) ?></div>

     <div class="col-md-3"><?= $form->field($Address, 'BlockNo')->textInput(['maxlength' => true]) ?></div>

     <div class="col-md-3"><?= $form->field($Address, 'UnitNo')->textInput(['maxlength' => true]) ?></div>
</div>
<div class ="rowssss">
     <div class="col-md-6"><?= $form->field($Address, 'BldgName')->textInput(['maxlength' => true]) ?></div>

     <div class="col-md-6"><?= $form->field($Address, 'Street')->textInput(['maxlength' => true]) ?></div>
</div>
<div class ="kenny">
     <div class="col-md-6"><?= $form->field($Address, 'Purok')->textInput(['maxlength' => true]) ?></div>

     <div class="col-md-6"><?= $form->field($Address, 'Subdivision')->textInput(['maxlength' => true]) ?></div>
</div>
<div class ="ken">

      <div class="col-md-6"><?= $form->field($model, 'rtohouholhead')->textInput(['maxlength' => true])  ?></div>

	  <div class="col-md-6"><?= $form->field($model, 'name_subd_zone_sitio_purok')->textInput(['maxlength' => true])  ?></div>
</div>
    <div class="form-group" = style="padding: 50px">
	<center><?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?></center>
    </div>

    <?php ActiveForm::end(); ?>
