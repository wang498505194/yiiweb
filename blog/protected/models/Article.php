<?php 

	
class Article extends CActiveRecord{


	public static function model($className = __CLASS__){
		return parent::model($className);
	}

	public function tableName(){
		return "{{article}}";
	}


	public function attributeLabels(){
		return array(
			'title'	=>'标题',
			'type' 	=>'类型',
			'cid'  	=>'栏目',
			'thump'	=>'缩略图',
			'info'	=>'摘要',
			'content'=>'内容'
		);
	}

	public function rules(){
		return array(
			array('title','required','message'=>'标题必填'),
			array('content','safe'),
			array('cid','safe')
			
		);
	}

}







?>