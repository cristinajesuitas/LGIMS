<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use backend\assets;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;


?>
<style>
.login-box{
	background:grey;
	border:2px solid black;
	border-radius:5px;
	font-weight:bold;
	color: black;
	margin:0;
}

</style>
<div class="header" align="center">
	<img src="image\Lgimsicon.png" height="228" weight="224"
	
<div class="site-login"> 
    <div class="row ">
        <div class="login-box">
		<h1>Sign In to LGIMS</h1>
            <div class="col-md-12 box box-radius">
			 <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
               
                <?= $form->field($model, 'username', ['template' => '
                        <div class="col-sm-12" style="margin-top:15px;">
                            <div class="input-group col-sm-12">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                {input}
                            </div>{error}{hint}
                        </div>'])->textInput(['autofocus' => true])
                                ->input('text', ['placeholder'=>'Username']) ?>

                <?= $form->field($model, 'password', ['template' => '
                        <div class="col-sm-12" style="margin-top:15px;">
                            <div class="input-group col-sm-12">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </span>
                                {input}
                            </div>{error}{hint}
                        </div>'])->passwordInput()
                                ->input('password', ['placeholder'=>'Password'])?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
