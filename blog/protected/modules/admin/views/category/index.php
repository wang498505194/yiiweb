<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>">
		<title>Document</title>
	</head>

	<body>
		<?php 
			if(Yii::app()->user->hasFlash('hasArt')){
				echo Yii::app()->user->getFlash('hasArt');
			}
		?>
		<table border="5">
			<tr>
				<td class="th" colspan="10">查看栏目</td>
			</tr>
			<tr>
				<td>CID</td>
				<td>栏目名称</td>
				<td>操作</td>
			</tr>
			<?php foreach($categoryInfo as $v):?>
				<tr>
					<td><?php echo $v->cid?></td>
					<td><?php echo $v->cname?></td></td>
					<td>
						[<a href="<?php echo $this->createUrl('edit',array('cid'=>$v->cid)) ?>">编辑</a>]
						[<a href="<?php echo $this->createUrl('del',array('cid'=>$v->cid)) ?>">删除</a>]
					</td>
				</tr>
			<?php endforeach?>

		</table>
	</body>
</html>