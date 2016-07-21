<?php

class UserController extends Controller{

	public function actionPasswd(){

		$userModel = User::model();

		if(isset($_POST['User'])){

			$userInfo=$userModel->find('username=:name',array(':name=>s'));

			$userModel->attributes = $_POST['User'];

			if($userModel->validate()){
				$password = md5($_POST['User']['password1']);
				if($userModel->updateByPk($userInfo->uid,array('password'=>$password))){
					echo 1;die;
				}
			}
		}

		 // p(uid);


		$this->render('index',array('userModel'=>$userModel));
	}
}




?>