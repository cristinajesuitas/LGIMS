<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Civilstatus */

$this->title = 'Civil Status';
$this->params['breadcrumbs'][] = ['label' => 'Civil Status', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="civilstatus-create">

    <h1><center><?= Html::encode($this->title) ?></center></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
