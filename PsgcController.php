<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\RegionSearch;
use backend\models\ProvinceSearch;
use backend\models\MunicipalSearch;
use backend\models\BarangaySearch;

class PsgcController extends RegionController
{
    public function actionIndex()
    {
       
        $searchModel = new RegionSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		$dataProvider->pagination = ['pageSize' => 10];

		return $this->render('index', [
			'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,
  ]);
    }

	public function getViewFile($viewName)
{
    if(($theme=Yii::app()->getTheme())!==null && ($viewFile=$theme->getViewFile($this,$viewName))!==false)
        return $viewFile;
    $moduleViewPath=$basePath=Yii::app()->getViewPath();
    if(($module=$this->getModule())!==null)
        $moduleViewPath=$module->getViewPath();
    return $this->resolveViewFile($viewName,$this->getViewPath(),$basePath,$moduleViewPath);
}	
}
