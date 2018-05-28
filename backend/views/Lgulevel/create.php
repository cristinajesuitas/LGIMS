<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Lgulevel */


$this->params['breadcrumbs'][] = ['label' => 'LGU Level', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lgulevel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
