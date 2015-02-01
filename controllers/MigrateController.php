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
		// https://github.com/yiisoft/yii2/issues/1764#issuecomment-42436905
		$oldApp = Yii::$app;
		new \yii\console\Application([
			'id'            => 'Command runner',
			'basePath'      => '@app',
			'components'    => [
				'db' => $oldApp->db,
			],
		]);

		$migrationPaths = Yii::$app->getModule('sharedhost')->migrationPaths;

		foreach($migrationPaths as $migrationPath){
			Yii::$app->runAction('sharedhost/migrate/up', ['migrationPath' => $migrationPath, 'interactive' => false]);
		}

		Yii::$app = $oldApp;
	}

}
