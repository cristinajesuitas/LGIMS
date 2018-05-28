<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Education */


$this->params['breadcrumbs'][] = ['label' => 'Educations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="education-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
