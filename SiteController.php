<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Region;
use backend\models\RegionSearch;
use backend\models\ProvinceSearch;
use backend\models\MunicipalSearch;
use backend\models\BarangaySearch;
use app\models\UserForm;
use reportico\Components;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error','history','mission','clearance','residency', 'citizen','residencyuser','geological','composition','Example','inhabitants'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

	 public function actionHistory()
    {
        return $this->render('history');
    }
	 public function actionMission()
    {
        return $this->render('mission');
    }
	public function actionClearance()
    {
        return $this->render('clearance');
    }
	public function actionCitizen()
    {
        return $this->render('citizen');
    }
	public function actionResidency()
	{
		return $this->render('residency');
    }
	
	public function actionResidencyuser()
	
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

        return $this->render('residencyuser', [
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
	
	public function actionGeological()
	{
		return $this->render('geological');
	}
	public function actionComposition()
	{
		return $this->render('composition');
	}
	public function actionInhabitants()
	{
		return $this->render('inhabitants');
		
	}




	
    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
		$this->layout = 'login';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
