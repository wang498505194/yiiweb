<!DOCTYPE html>
<html>
	<body>
		
		<?php $form = $this->beginWidget('CActiveForm',array('htmlOptions'=>array('enctype'=>'multipart/form-data')));
		?>
			<table>
				<tr>
					<td class="th" colspan="10">
						发表文章
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $form->labelEx($articleModel,'title')?>
					</td>
					<td>
					<?php echo $form->textField($articleModel,'title',array('maxlenth'=>20))?>
					<?php echo $form->error($articleModel,'title')?>

					</td>
				</tr>
				<tr>
					<td>
						<?php echo $form->labelEx($articleModel,'type')?>
					</td>
					<td>
						<?php echo $form->radioButtonList(
							$articleModel,
							'type',
							array(0=>'普通',1=>'热门'),
							array('separator'=>'&nbsp;'))
						?>
						<?php echo $form->error($articleModel,'type')?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $form->labelEx($articleModel,'cid')?>
					</td>
					<td>
						<?php echo $form->dropDownList($articleModel,'cid',$cateArr)?>
						
					</td>
				</tr>
				<tr>
					<td colspan="10">
						<?php echo $form->labelEx($articleModel,'content')?>
					</td>
				</tr>
				<tr>	
					<td colspan="10">
						
						<?php echo $form->textArea($articleModel,'info',array('cols'=>100,'rows'=>50,'maxlength'=>100))?>
						<?php echo $form->error($articleModel,'content')?>
						
							
						</textarea> 
					</td>
				</tr>

			</table>
			<input type="submit" value="发布">
		<?php $this->endWidget() ?>
	</body>


</html>