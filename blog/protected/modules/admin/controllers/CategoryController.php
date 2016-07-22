<?php 

	class CategoryController extends Controller{

		public function actionIndex(){
			$categoryModel = Category::model();
			$sql = "SELECT cid,cname FROM {{category}}";
			$categoryInfo = $categoryModel->findAllBysql($sql);
			// var_dump($categoryInfo);
			$this->render('index',array('categoryInfo'=>$categoryInfo));
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

		public function actionEdit($cid){

			$categoryModel= Category::model();
			$categoryInfo = $categoryModel->findByPk($cid);
			// p($_POST);

			if(isset($_POST['Category'])){
				$categoryInfo->attributes = $_POST['Category'];
				if($categoryInfo->save()){
					$this->redirect(array('index'));
				}
			}
			$this->render('edit',array('categoryModel'=>$categoryModel));
		}



		public function actionDel($cid){
			$articleModel = Article::model();
			$sql = "SELECT aid FROM {{article}} WHERE cid=$cid";
			$articleInfo = $articleModel->findBysql($sql);
			if(is_object($articleInfo)){

				Yii::app()->user->setFlash('hasArt','栏目下面有文章，请先删除文章');
				$this->redirect(array('index'));
			}
			else{
				if(Category::model()->deleteByPk($cid)){
					$this->redirect(array('index'));

				}
			}
		}











	}

?>