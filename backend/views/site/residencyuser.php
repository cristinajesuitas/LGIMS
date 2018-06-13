<?php
use yii\bootstrap\Tabs;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use backend\models\RegionSearch;
use backend\models\Region;
?>

<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#region" aria-controls="region" role="tab" data-toggle="tab">Region</a></li>
    <li role="presentation"><a href="#province" aria-controls="province" role="tab" data-toggle="tab">Province</a></li>
    <li role="presentation"><a href="#municipal" aria-controls="municipal" role="tab" data-toggle="tab">City/Municipal</a></li>
    <li role="presentation"><a href="#barangay" aria-controls="barangay" role="tab" data-toggle="tab">Barangay</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="region">
		<div>
			</br>
				<div class="col-md-10"></div>
					<p>
						<?= Html::a('Add Region', ['value'=>Url::to(['region/create']),'title'=>'Adding New Region', 'class' => 'showModalButton btn btn-success']) ?>
					</p>
					
						<?= GridView::widget([
						'dataProvider' => $dataProvider1,
						'filterModel' => $regionModel,
						'summary' => "{begin} of {end}",
						'columns' => [
							/**['class' => 'yii\grid\SerialColumn'],
	
							'id',*/
							'name',
							'code',

							['class' => 'yii\grid\ActionColumn','template' => '{view} {update}'],
							],
						]); ?>          
		</div>
	</div>
	
    <div role="tabpanel" class="tab-pane" id="province">
		<div>
			</br>
				<div class="col-md-10"></div>
					<p>
						<?= Html::a('Add Province', ['create'], ['class' => 'btn btn-success']) ?>
					</p>
					
						<?= GridView::widget([
						'dataProvider' => $dataProvider2,
						'filterModel' => $provinceModel,
						'summary' => "{begin} of {end}",
						'columns' => [
							/**['class' => 'yii\grid\SerialColumn'],
	
							'id',*/
							'name',
							'code',

							['class' => 'yii\grid\ActionColumn','template' => '{view} {update}'],
							],
						]); ?>          
		</div>
	</div>
    <div role="tabpanel" class="tab-pane" id="municipal">
		<div>
			</br>
				<div class="col-md-10"></div>
					<p>
						<?= Html::a('Add City/Municipal', ['create'], ['class' => 'btn btn-success']) ?>
					</p>
					
						<?= GridView::widget([
						'dataProvider' => $dataProvider3,
						'filterModel' => $provinceModel,
						'summary' => "{begin} of {end}",
						'columns' => [
							/**['class' => 'yii\grid\SerialColumn'],
	
							'id',*/
							'name',
							'code',

							['class' => 'yii\grid\ActionColumn','template' => '{view} {update}'],
							],
						]); ?>          
		</div>
	</div>
    <div role="tabpanel" class="tab-pane" id="barangay">
		<div>
			</br>
				<div class="col-md-10"></div>
					<p>
						<?= Html::a('Add City/Municipal', ['create'], ['class' => 'btn btn-success']) ?>
					</p>
					
						<?= GridView::widget([
						'dataProvider' => $dataProvider4,
						'filterModel' => $provinceModel,
						'summary' => "{begin} of {end}",
						'columns' => [
							/**['class' => 'yii\grid\SerialColumn'],
	
							'id',*/
							'name',
							'code',

							['class' => 'yii\grid\ActionColumn','template' => '{view} {update}'],
							],
						]); ?>          
		</div>
	</div>
  </div>

</div>