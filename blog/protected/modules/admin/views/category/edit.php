<html>
	<body>
		<h1>Add Page Now!</h1>
		<?php $form = $this->beginWidget('CActiveForm',array('enableClientValidation'=>true,'clientOptions'=>array(
				'validateOnsubmit'=>true

			),
		)) ?>


		<table class="table">

			<tr>
				<td class="th" colspan="10">修改栏目</td>
			</tr>
			<tr>
				<td><?php echo $form->labelEx($categoryModel, 'cname')?></td>
				<td>
					<?php echo $form->textField($categoryModel,'cname')?>
					<?php echo $form->error($categoryModel,'cname')?>
				</td>
			</tr>
			<tr>
				<td colspan="10"><input type="submit" value="修改" class="input_button"/></td>
			</tr>
		</table>
		<?php $this->endWidget() ?>




		</table>



	</body>
</html>