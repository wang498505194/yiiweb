<!DOCTYPE HTML>
<html>
<body>

	
	<div id="content">
		<h2>Login Now!</h2>


		<!-- <form action="20160713_check.php" method="post">
			UserId:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id"><br>
			PassWord:<input type="text" name="password"><br>
		<input type=submit>
		</form>	 -->

		<?php $form = $this->beginWidget('CActiveForm')?>

			<?php echo $form->textField($loginForm,'username',array('id->userName')) ?>
			<?php echo $form->textField($loginForm,'password',array('id->psd')) ?>
			<?php echo $form->textField($loginForm,'captcha',array('id->verify')) ?>
			<input type="submit" id="sub" value=""/>	
				<div class="captcha">
					<?php $this->widget
						('CCaptcha',
							array(
								'showRefreshButton'=>true,
								'clickableImage'=>true,
								'imageOptions'=>array
									(
										'alt'=>'点击换图',
										'title'=>'点击换图',
										'style'=>'cursor:pointer'
						
									)
								)
						); 
					?>
			</div>
		<?php $this->endWidget() ?>

		<div class="four_bj">
			<p class="f_lt"></p>
			<p class="f_rt"></p>
			<p class="f_lb"></p>
			<p class="f_rb"></p>
		</div>
		<ul id="peo">
			<li class="error"><li class="error"><?php echo $form->error($loginForm,'username')?></li></li>
		</ul>
		<ul id="psd">
			<li class="error"><li class="error"><?php echo $form->error($loginForm,'password')?></li></li>
		</ul>
		<ul id="ver">
			<li class="error"><?php echo $form->error($loginForm,'captcha')?></li>
		</ul>
	</div>
</body>
</html>

