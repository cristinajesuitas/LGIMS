<?php

namespace backend\controllers;

use Yii;
use backend\models\Region;
use backend\models\RegionSearch;
use backend\models\ProvinceSearch;
use backend\models\MunicipalSearch;
use backend\models\BarangaySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class PsgcController extends Controller
{
    public function actionIndex()
    {
        $regionModel= new RegionSearch();
        $dataProvider1 = $regionModel->search(Yii::$app->request->queryParams);
		$dataProvider1->pagination = ['pageSize' => 10];
		$provinceModel= new ProvinceSearch();
        $dataProvider2 = $provinceModel->search(Yii::$app->request->queryParams);
		$dataProvider2->pagination = ['pageSize' => 15];
		$municipalModel= new MunicipalSearch();
        $dataProvider3 = $municipalModel->search(Yii::$app->request->queryParams);
		$dataProvider3->pagination = ['pageSize' => 20];
		$barangayModel= new BarangaySearch();
        $dataProvider4 = $barangayModel->search(Yii::$app->request->queryParams);
		$dataProvider4->pagination = ['pageSize' => 25];

        return $this->render('index', [
            'regionModel' => $regionModel,
            'dataProvider1' => $dataProvider1,
			'provinceModel' => $provinceModel,
            'dataProvider2' => $dataProvider2,
			'municipalModel' => $municipalModel,
            'dataProvider3' => $dataProvider3,
			'barangayModel' => $barangayModel,
            'dataProvider4' => $dataProvider4,
			]);
    }

	/* public function actionCreate()
    {
        $region = new Region();

        if ($region->load(Yii::$app->request->post()) && $region->save()) {
            return $this->redirect(['view', 'id' => $region->id]);
		}
         else {
            return $this->render('create', [
                'model1' => $region,
            ]);
        }
    } */
}
