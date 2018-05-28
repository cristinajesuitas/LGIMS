<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Lguname;
use backend\models\Lgucategory;
use backend\models\Lgudistrict;
use backend\models\Religion;
use backend\models\Ethnicity;
use backend\models\Citizenship;
use backend\models\Lgulevel;

/* @var $this yii\web\View */
/* @var $model backend\models\Lguprofile */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="Lguprofile-form" = style="font-family: Verdana; margin-top: 100px; margin-bottom: 200px; margin-right: 20px; margin-left: 20px; background-color: gray; border-radius: 20px;">
    <?php $form = ActiveForm::begin(); ?>
<div class="forms" = style="font-family: Verdana; margin-top: 100px; margin-bottom: 200px; margin-right: 20px; margin-left: 20px;">
<font color="gray"> . </font>
<hr>
    <h1><b>LGU Information</b></h1>
<hr>
<div class="LguInfo">
	<div class="col-md-6"><?= $form->field($model, 'cap_lguname_id')->dropDownList( ArrayHelper::map(Lguname::find()->all(), 'id','name'),[ 'prompt'=>'Choose LGU Name', 'style' => 'width:500px'])  ?></div>

	<div class="col-md-6"><?= $form->field($model, 'cap_lgudistrict_id')->dropDownList( ArrayHelper::map(Lgudistrict::find()->all(), 'id','name'),[ 'prompt'=>'Choose LGU District', 'style' => 'width:500px'])  ?></div>

  

</div>	
<div class="LguInfo1">
	
	<div class="col-md-6"><?= $form->field($model, 'cap_lgucategory_id')->dropDownList( ArrayHelper::map(Lgucategory::find()->all(), 'id','name'),[ 'prompt'=>'Choose LGU Category', 'style' => 'width:500px'])  ?></div>
	
	<div class="col-md-6"><?= $form->field($model, 'cap_lgulevel_id')->dropDownList( ArrayHelper::map(Lgulevel::find()->all(), 'ID','name'),
	[
		'prompt'=>'Choose LGU Level', 'style' => 'width:500px'
	])  ?></div>

</div>
<div class="LguInfo2">
	
	<div class="col-md-6"><?= $form->field($model, 'cap_religion_id')->dropDownList( ArrayHelper::map(Religion::find()->all(), 'id','name'),[ 'prompt'=>'Choose Religion', 'style' => 'width:500px'])  ?></div>

	<div class="col-md-6"><?= $form->field($model, 'cap_citizenship_id')->dropDownList( ArrayHelper::map(Citizenship::find()->all(), 'ID','name'),[ 'prompt'=>'Choose Citizenship', 'style' => 'width:500px'])  ?></div>
</div>	
<hr>
<h1></h1>
<hr>
<div class="Info1">
	
	<div class="col-md-12"><?= $form->field($model, 'cap_ethnicity_id')->dropDownList( ArrayHelper::map(Ethnicity::find()->all(), 'ID','name'),[ 'prompt'=>'Choose Ethnicity', 'style' => 'width:500px'])  ?></div>
	
	
</div>

<div class="Info2">
    <div class="col-md-6"><?= $form->field($model, 'name')->textInput(['style' => 'width:500px']) ?></div>
	
	<div class="col-md-6"><?= $form->field($model, 'totalbrgy')->textInput(['style' => 'width:500px']) ?></div>
    
</div>
<div class="Info4">
	<div class="col-md-6"><?= $form->field($model, 'website')->textInput(['style' => 'width:500px']) ?></div>

    <div class="col-md-6"><?= $form->field($model, 'landarea')->textInput(['style' => 'width:500px']) ?></div>

</div>
<div class="Info4">
    <div class="col-md-12"><?= $form->field($model, 'zipcode')->textInput(['style' => 'width:500px']) ?></div>
</div>

<hr>
    <div class="form-group" = style="padding: 50px">
        <center><?= Html::submitButton('Display', ['class' => 'btn btn-success']) ?></center>
    </div>

    <?php ActiveForm::end(); ?>

