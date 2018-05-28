<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use backend\models\Region;

/* @var $this yii\web\View */

?>

<?php $this->title = 'Philippine Standard Geographic Code'; ?>
</br>

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
				<div class="col-md-10" ></div>
				
					<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#regionModal">
  Add Region
</button>
<!-- Modal -->
<div class="modal" id="regionModal" tabindex="-1" role="dialog" aria-labelledby="regionModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="regionLabel">Adding New Region</h4>
      </div>
      <div class="modal-body">
			<?php Pjax::begin(); ?>
			<?= Yii::$app->view->render('@backend/views/region/_form' ) ?>
			<?php Pjax::end(); ?>
      </div>
      
    </div>
  </div>
</div>
					<!--<p>
						<?= Html::a('Add Region', $url='index.php?r=region/create', ['class' => 'btn btn-success']) ?>
					</p>-->
					
						<?php Pjax::begin(); ?>
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
					<?php Pjax::end(); ?>
						
		</div>
	</div>
	
    <div role="tabpanel" class="tab-pane" id="province">
		<div>
			</br>
				<div class="col-md-10"></div>
					<p>
						<?= Html::a('Add Province', $url='index.php?r=province/create', ['title'=>'Adding New Region', 'class' => 'showModalButton btn btn-success']) ?>
					</p>
						<?php Pjax::begin(); ?>
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
							<?php Pjax::end(); ?>	
		</div>
	</div>
    <div role="tabpanel" class="tab-pane" id="municipal">
		<div>
			</br>
				<div class="col-md-10"></div>
					<p>
						<?= Html::a('Add City/Municipal', $url='index.php?r=municipal/create', ['class' => 'btn btn-success']) ?>
					</p>
						<?php Pjax::begin(); ?>
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
							<?php Pjax::end(); ?>		
		</div>
	</div>
    <div role="tabpanel" class="tab-pane" id="barangay">
		<div>
			</br>
				<div class="col-md-10"></div>
					<p>
						<?= Html::a('Add Barangay', $url='index.php?r=barangay/create', ['class' => 'btn btn-success']) ?>
					</p>
						<?php Pjax::begin(); ?>
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
							<?php Pjax::end(); ?>	
		</div>
	</div>
  </div>
</div>
<?php
yii\bootstrap\Modal::begin([
    'headerOptions' => ['id' => 'modalHeader'],
    'id' => 'modal',
    'size' => 'modal-lg',
    //keeps from closing modal with esc key or by clicking out of the modal.
    // user must click cancel or X to close
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
]);
echo "<div id='modalContent'></div>";
yii\bootstrap\Modal::end();
?>