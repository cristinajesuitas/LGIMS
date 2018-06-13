<?php
$this->title = 'History';
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Lgulevel;
?>

<div class="Example-form">

    <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model, 'cap_lgulevel_id')->dropDownList( ArrayHelper::map(Lgulevel::find()->all(), 'id','name'),['prompt'=>'Choose Lgulevel']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?php ActiveForm::end(); ?>

</div>