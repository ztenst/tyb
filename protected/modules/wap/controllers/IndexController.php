<?php
class IndexController extends WapController{
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionInfo($id='')
	{
		$this->render('info',['info'=>ArticleExt::model()->findByPk($id)]);
	}
}