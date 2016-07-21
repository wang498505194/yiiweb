<html>
	<body>
		<h1>Add Page Now!</h1>
		<?php $form = $this->beginWidget('CActiveForm',array('enableClientValidation'=>true,'clientOptions'=>array(
				'validateOnsubmit'=>true

			),
		)) ?>


		<table class="table">

			<tr>
				<td class="th" colspan="10">添加栏目</td>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($categoryModel, 'cname')?></td>
				<td>
					<?php echo $form->textField($categoryModel,'cname')?>
					<?php echo $form->error($categoryModel,'cname')?>
				</td>
			</tr>
			<tr>
				<td colspan="10"><input type="submit" value="添加" class="input_button"/></td>
			</tr>
		</table>
		<?php $this->endWidget() ?>




		</table>



	</body>
</html>