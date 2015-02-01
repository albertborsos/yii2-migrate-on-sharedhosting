<?php

namespace albertborsos\yii2migrateonsharedhosting;

class Module extends \yii\base\Module
{
	public $controllerNamespace = 'albertborsos\yii2migrateonsharedhosting\controllers';

	public $name = 'Migrate';

	public $migrationPaths = [];

	public function init()
	{
		parent::init();
		// custom initialization code goes here
	}
}