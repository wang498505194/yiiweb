
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
			<th class="th" colspan="10">
			<h2>密码修改</h2></th>
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

	<!-- 修改密码成功提示 -->

	<?php 
		if(Yii::app()->user->hasFlash('success')){
			echo Yii::app()->user->getFlash('success');
		}

	?>





</body>
</html>

