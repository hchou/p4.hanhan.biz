<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// application components
	'components'=>array(
		// uncomment the following to use a SQLite database
        /*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// comment the following to stop using the MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=hanhanbi_p4_hanhan_biz',
			'emulatePrepare' => true,
			'username' => 'hanhanbi',
			'password' => 'nbTRXyRLtDpqRB8m',
			'charset' => 'utf8',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
	),
);