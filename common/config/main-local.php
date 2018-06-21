<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=etanayan',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
			'tablePrefix' => 'cap_',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
	// Add this to get debug and gii to work
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
             // permits any and all IPs
             // you should probably restrict this
            'allowedIPs' => ['*']
        ],
		'reportico' => [
            'class' => 'reportico\reportico\Module' ,
            'controllerMap' => [
                            'reportico' => 'reportico\reportico\controllers\ReporticoController',
                            'mode' => 'reportico\reportico\controllers\ModeController',
                            'ajax' => 'reportico\reportico\controllers\AjaxController',
                        ]
            ],
        'debug' => [
            'class' => 'yii\debug\Module',
             // permits any and all IPs
             // you should probably restrict this
            'allowedIPs' => ['*']
        ]
    ]
];
