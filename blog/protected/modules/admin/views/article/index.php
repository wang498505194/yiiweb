

<html>
	<body>
		<table>
			<tr>
				<td class="th" colspan="10">
					查看文章
				</td>
			</tr>

			<tr>
				<td>AID</td>
				<td>标题</td>
				<td>栏目</td>
				<!-- <td>发表时间</td> -->
				<td>操作</td>
			</tr>
			<?php foreach($articleInfo as $v):?>
				<tr>
					<td><?php echo $v->aid ?></td>
					<td><?php echo $v->title ?></td>
					<td><?php echo $v->cid ?></td>
					<!-- <td><?php echo $v->time ?></td> -->
					<td>
						[<a href="">编辑</a>]
						[<a href="">删除</a>]
					</td>
				</tr>
			<?php endforeach?>



		</table>

		<div>
			<?php 
				$this->widget('ClinkPager',array(
						'header' =>'',
						'firstPageLabel'=>'首页',
						'lastPageLabel'=>'末页',
						'prevPageLabel'=>'上一页',
						'nextPageLabel'=>'下一页',
						'pages'=>$pages,
						'maxButtonCount'=>5

					));

			?>



		</div> 



	</body>

</html>