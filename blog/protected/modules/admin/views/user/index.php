
<html>
<body>



	<?php $form=$this->beginWidget('CActiveForm',array(
		'id'=>'contact-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array('validateOnSubmit'=>true,
		),
	)); ?>


	<table class="table">
		<tr>
			<td class="th" colspan="10">修改密码</td>
		</tr>

		<tr>
			<td >用户</td>
			<td ><?php echo Yii::app()->user->name ?></td>
		</tr>

		<tr>
			<td ><?php echo $form->labelEx($userModel,'password') ?></td>
			<td >
				<?php echo $form->passwordField($userModel,'password') ?>
				<?php echo $form->error($userModel,'password') ?>
			</td>
		</tr>

		<tr>
			<td >
				<?php echo $form->labelEx($userModel,'password1') ?>
				
			</td>
			<td >
				<?php echo $form->passwordField($userModel,'password1') ?>
				<?php echo $form->error($userModel,'password1') ?>
			</td>
		</tr>

		<tr>
			<td >
				<?php echo $form->labelEx($userModel,'password2') ?>
					
			</td>
			<td >
				<?php echo $form->passwordField($userModel,'password2') ?>
				<?php echo $form->error($userModel,'password2') ?>	
			</td>
		</tr>
		<tr>
			<td colspan="10">
				<input type="submit" name="input_button" value="修改" />
			</td>
		</tr>
	</table>
	<?php $this->endWidget() ?>







</body>
</html>

