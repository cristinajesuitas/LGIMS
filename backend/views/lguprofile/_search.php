<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Lguprofilesearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lguprofile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>
	
	<?= $form->field($model, 'LGU Name') ?>
	 
	<?= $form->field($model, 'LGU Category') ?>
	
	<?= $form->field($model, 'LGU District') ?>
	
	<?= $form->field($model, 'Religion') ?>
	
	<?= $form->field($model, 'Ethnicity') ?>
	
	<?= $form->field($model, 'Citizenship') ?>
	
    <?= $form->field($model, 'LGU Level ') ?>
    
	<?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Website') ?>



    <?php // echo $form->field($model, 'totalbrgy') ?>

    <?php // echo $form->field($model, 'landarea') ?>

    <?php // echo $form->field($model, 'zipcode') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
