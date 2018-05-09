<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Lgulevel;
use backend\models\Lguclass;

/* @var $this yii\web\View */
/* @var $model backend\models\Lguprofile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lguprofile-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<?= $form->field($model, 'cap_lgulevel_id')->dropDownList( ArrayHelper::map(Lgulevel::find()->all(), 'ID','name'),['prompt'=>'Choose LGU Level'])  ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cap_lguclass_id')->dropDownList( ArrayHelper::map(Lguclass::find()->all(), 'ID','name'),['prompt'=>'Choose Income Class'])  ?>

    

    <?= $form->field($model, 'totalbrgy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'landarea')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zipcode')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
