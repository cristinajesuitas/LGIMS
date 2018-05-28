<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Arrayhelper;
use backend\models\Region;
use backend\models\Province;

/* @var $this yii\web\View */
/* @var $model backend\models\Municipal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="municipal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cap_region_id')->dropDownList( ArrayHelper::map(Region::find()->all(), 'id', 'name'),['prompt'=>'Choose Region']) ?>

    <?= $form->field($model, 'cap_province_id')->dropDownList( ArrayHelper::map(Province::find()->all(), 'id', 'name'),['prompt'=>'Choose Province']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
