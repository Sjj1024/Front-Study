<!DOCTYPE html>
<html>
<head>
	<title>我是管理员登陆</title>
</head>
<body>
	<!-- 因为登陆是一个标案，所以使用form -->
	<form action="loginprocess.php" method="POST">
		<table>
			<!-- 设计用户登录界面，使用table标签包trtd标签 -->
			<tr><td>用户ID：</td><td><input type="text" name="id"></td></tr>
			<tr><td>密 &nbsp;码：</td><td><input type="password" name="pass"></td></tr>
			<tr><td><td><input type="submit" value="用户登录"></td></tr>
		</table>
	</form>
	<?php
		if (! empty($_GET['error'])) {
			# code...
			$error = $_GET['error'];
			if ($error==1) {
				# code...
				echo '<p style="color: red;">登陆失败了哦....</p>';
			}
		}
	?>
</body>
</html>
