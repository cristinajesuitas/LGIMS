<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Occupation */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Occupation', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="occupation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
       
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'ID',
            'name',
            'code',
        ],
    ]) ?>

</div>
