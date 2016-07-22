<?php

	class ArticleController extends Controller{
		
		public function actionIndex(){
			$cri = new CDbCriteria();
			$articleModel=Article::model();
			$total=$articleModel->count($cri);
			$pager=new CPagination($total);
			$pager->pageSize = 100;
			$pager->applyLimit($cri);

			$articleInfo=$articleModel->findAll($cri);

			$data = array(
				'articleInfo'=>$articleInfo,
				'pages'=>$pager
				);

			$this->render('index',$data);
			p($data);
		}


		public function actionAdd(){
			$articleModel = new Article();
			$category=Category::model();
			$categoryInfo = $category->findAllBySql("SELECT cid,cname FROM {{category}}");
			$cateArr = array();
			$cateArr[]='请选择';
			foreach($categoryInfo as $v){
				$cateArr[$v->cid] = $v->cname;
			}
			$data = array(
				'articleModel'=>$articleModel,
				'cateArr'     =>$cateArr

				);
			if(isset($_POST['Article'])){
				$articleModel->attributes = $_POST['Article'];
			}
			if($articleModel->save()){
				$this->redirect(array('index'));
			}

			$this->render('add',$data);
		}

	}

?>