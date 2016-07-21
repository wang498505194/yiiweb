<?php

class LoginController extends Controller{
	public function actionIndex(){
//验证链接数据表成功
		// var_dump(Yii::app()->db);


//定义模型
		// $userInfo=User::model()->find('username=:name',array(':name'=>'admin'));
		// p($userInfo->password);die;


		$loginForm = new LoginForm();
		if(isset($_POST['LoginForm'])){
			$loginForm->attributes = $_POST['LoginForm'];
			
			if($loginForm->validate() && $loginForm->login()){
				// echo Yii::app()->user->name;die;
				Yii::app()->session['logintime']=time();

				$this->redirect(array('default/index'));
			}
		}
		// p($_POST);die;


		$this->render('index',array('loginForm'=>$loginForm));
	}
	public function actions(){

		return array(
			
			'captcha' => array(

				'class' 	=> 'system.web.widgets.captcha.CCaptchaAction',
				'height' 	=>	25,
				'width'  	=>	80,
				'minLength'	=>	4,
				'maxLength'	=>	4
				),
			);
	}

	public function actionOut(){
		Yii::app()->user->logout();
		$this->redirect(array('index'));
	}

	



















}


?>