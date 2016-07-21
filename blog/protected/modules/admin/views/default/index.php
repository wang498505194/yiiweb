<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<p>
This is the view content for action "<?php echo $this->action->id; ?>".
The action belongs to the controller "<?php echo get_class($this); ?>"
in the "<?php echo $this->module->id; ?>" module.
</p>
<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>

<p class="out">
	<span class="out_bg">&nbsp&nbsp&nbsp&nbsp&nbsp</span>&nbsp
	<a href="<?php echo $this->createUrl('login/out') ?>" target="_self">退出</a>
</p>

<p class="top_bar">
	<span>
		管理员：
	</span>
	<span class="adm_pic">&nbsp&nbsp&nbsp&nbsp</span>
	<span class="adm_people">[<?php echo Yii::app()->user->name ?>]

<p class="right">
<iframe frameborder="2" border="0" height='250' width='500' scrolling="yes" name="iframe" src="<?php echo $this->createUrl('default/copy') ?>">	</iframe>

























