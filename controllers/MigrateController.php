<?php

namespace albertborsos\yii2migrateonsharedhosting\controllers;

use albertborsos\yii2lib\web\Controller;
use Yii;

class MigrateController extends Controller
{
	public function init()
	{
		parent::init();
		$this->defaultAction = 'index';
		$this->layout = '//center';

		$this->actionName = array_merge($this->actionName, [
			'migrate' => 'Kosaram tartalma',
		]);
	}

	public function actionUp(){

	}

}
