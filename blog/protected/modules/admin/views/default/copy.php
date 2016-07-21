<!DOCTYPE html>
<html>

	<table>
		<tr>
			<td width="100">用户名</td>
			<td width="100"><?php echo Yii::app()->user->name ?></td>
		</tr>
		<tr>
			<td>登录时间</td>
			<td><?php echo date('Y-m-d',Yii::app()->session['logintime']) ?></td>
		</tr>
		<tr>
			<td>客户端IP</td>
			<td><?php echo Yii::app()->request->userHostAddress ?></td>
		</tr>
		<tr>
			<td>服务器环境</td>
			<td><?php echo $_SERVER['SERVER_SOFTWARE']?></td>
		</tr>
		<tr>
			<td>PHP版本</td>
			<td><?php echo PHP_VERSION ?></td>
		</tr>
		<tr>
			<td>服务器IP</td>
			<td><?php echo $_SERVER['SERVER_ADDR']  ?></td>
		</tr>
		<tr>
			<td>数据库信息</td>
			
			<td>NULL</td>
		</tr>

	</table>

</html>