<?php

class UserController extends Controller{

	public function actionPasswd(){

		$userModel = User::model();

		if(isset($_POST['User'])){

			$userInfo=$userModel->find('username=:name',array(':name'=>Yii::app()->user->name));

			$userModel->attributes = $_POST['User'];

			if($userModel->validate()){
				$password = md5($_POST['User']['password1']);
				if($userModel->updateByPk($userInfo->uid,array('password'=>$password))){
						Yii::app()->user->setFlash('success','修改密码成功');
				}
			}

		}



		$this->render('index',array('userModel'=>$userModel));
	}

}




?>