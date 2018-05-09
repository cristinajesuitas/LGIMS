<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
	'aliases'=>[
		'@adminlte/widgets'=>'@vendor/adminlte/yii2-widgets'
	],
    'modules' => [
        ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
			//'class'=>'backend\components\User',
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    
       /*  'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ], 
        ],*/
       
    ],
    'params' => $params,
	'modules' => [
		'gii' => [
			'class' => 'yii\gii\Module'
			
			],
	'reportico' => [
          'class' => 'reportico\reportico\Module' ,
          'controllerMap' => [
                         'reportico' => 'reportico\reportico\controllers\ReporticoController',
                          'mode' => 'reportico\reportico\controllers\ModeController',
                           'ajax' => 'reportico\reportico\controllers\AjaxController',
                  ]
            ],
		],
];
