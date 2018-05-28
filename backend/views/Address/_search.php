<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AddressSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="address-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cap_citizen_id') ?>

    <?= $form->field($model, 'HouseNo') ?>

    <?= $form->field($model, 'LotNo') ?>

    <?= $form->field($model, 'BlockNo') ?>

    <?= $form->field($model, 'UnitNo') ?>

    <?php // echo $form->field($model, 'BldgName') ?>

    <?php // echo $form->field($model, 'Street') ?>

    <?php // echo $form->field($model, 'Purok') ?>

    <?php // echo $form->field($model, 'Subdivision') ?>

    <?php // echo $form->field($model, 'cap_barangay_id') ?>

    <?php // echo $form->field($model, 'cap_municipal_id') ?>

    <?php // echo $form->field($model, 'cap_province_id') ?>

    <?php // echo $form->field($model, 'cap_region_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
