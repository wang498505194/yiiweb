<?php 

	class CategoryController extends Controller{

		public function actionIndex(){
			$this->render('index');
		}

		public function actionAdd(){
			
			$categoryModel = new Category();
			if(isset($_POST['Category'])){
				$categoryModel->attributes = $_POST['Category'];
				if($categoryModel->save()){
					$this->redirect(array('index'));
				}
			}
			p($_POST);
			$this->render('add',array('categoryModel'=>$categoryModel));
		}

	}

?>