<?php
use yii\bootstrap\Tabs;
use yii\grid\GridView;
use yii\helpers\Html;
use backend\models\RegionSearch;
use backend\models\Region;
?>

<p>
        <?= Html::a('Add', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	

<?php
echo Tabs::widget([
	'options' => ['tab' => 'div'],
    'itemOptions' => ['tab' => 'div'],
    'items' => [
        [
			  'label' => 'Region',
			  'content' => Html::a('Add Region', ['create'], ['class' => 'btn btn-success']),
			 'contentOptions'=> GridView::widget([
        'dataProvider' => $dataProvider1,
        'filterModel' => $regionModel,
		'summary' => "{begin} of {end}",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         //   'id',
            'name',
            'code',
			],
           ]),
            

        ],
        [
			'options'=>['id'=>'provinceTab'],
            'label' => 'Province',
            'content' => GridView::widget([
        'dataProvider' => $dataProvider2,
        'filterModel' => $provinceModel,
		'summary' => "{begin} of {end}",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         //   'id',
			'cap_region_id',
            'name',
            'code',
			],
           ]),
           
        ],
        [
            'label' => 'City/Municipal',
            'content' => GridView::widget([
        'dataProvider' => $dataProvider3,
        'filterModel' => $municipalModel,
		'summary' => "{begin} of {end}",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         //   'id',
			'cap_province_id',
            'name',
            'code',
			],
           ]),
        ],
        [
            'label' => 'Barangay',
            'content' => GridView::widget([
        'dataProvider' => $dataProvider4,
        'filterModel' => $barangayModel,
		'summary' => "{begin} of {end}",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         //   'id',
			'cap_municipal_id',
            'name',
            'code',
			],
           ]),
        ],
                
            ],
       
]);
?>

