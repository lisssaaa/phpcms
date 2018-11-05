<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>后台用户修改</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/phpcms_v9_UTF8/install_package/statics/bs/css/bootstrap.min.css">
</head>
<body>
	<button class="btn btn-success">用户列表</button>|<a href="?m=user&c=user&a=add&pc_hash=<?php echo $_SESSION['pc_hash'] ?>" class="btn btn-info">添加</a>
	<hr>
	<form action="?m=user&c=user&a=update&pc_hash=<?php echo $_SESSION['pc_hash'] ?>" method="post">
		<div class="form-group">
			<label>用户名</label>
			<input type="text" name="name" class="form-control" placeholder="请输入用户名" value="<?php echo $info['name'] ?>">
		</div>

		<div class="form-group">
			<label>电话</label>
			<input type="text" name="phone" class="form-control" placeholder="请输入电话" value="<?php echo $info['phone'] ?>">
		</div>
		<input type="hidden" name="id" value="<?php echo $info['id'] ?>">
		<input type="submit" class="btn btn-primary" value="修改">
	</form>
</body>
</html>