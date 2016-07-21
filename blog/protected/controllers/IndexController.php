<?php

class IndexController extends Controller{
	public function actionIndex(){
		//echo 'www.qq.com';

	// 	$data = array(
	// 		'title'=>'Jerry'
	// 		);
	// 	p($data);die;
		// $this->renderPartial('index',$data);
		$this ->render('index');
	}

	public function  actionAdd(){
		$this->renderPartial('add');
	}

}