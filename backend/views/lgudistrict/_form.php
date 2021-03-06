<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Lgulevel;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\lgudistrict */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lgudistrict-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cap_lgulevel_id')->dropDownList( ArrayHelper::map(Lgulevel::find()->all(), 'ID','name'),['prompt'=>'Choose LGU Level'])  ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
