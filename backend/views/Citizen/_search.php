<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CitizenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="citizen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fname') ?>

    <?= $form->field($model, 'mname') ?>

    <?= $form->field($model, 'lname') ?>

    <?= $form->field($model, 'bdate') ?>

    <?php // echo $form->field($model, 'cap_civilstatus_id') ?>

    <?php // echo $form->field($model, 'cap_disability_id') ?>

    <?php // echo $form->field($model, 'cap_citizenship_id') ?>

    <?php // echo $form->field($model, 'cap_ethnicity_id') ?>

    <?php // echo $form->field($model, 'cap_sex_id') ?>

    <?php // echo $form->field($model, 'cap_occupation_id') ?>

    <?php // echo $form->field($model, 'placeofbirth') ?>

    <?php // echo $form->field($model, 'streetname') ?>

    <?php // echo $form->field($model, 'number') ?>

    <?php // echo $form->field($model, 'rtohouholhead') ?>

    <?php // echo $form->field($model, 'name_subd_zone_sitio_purok') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
