<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>后台用户添加</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/phpcms_v9_UTF8/install_package/statics/bs/css/bootstrap.min.css">
</head>
<body>
	<button class="btn btn-success">留言列表</button>|<a href="?m=liuyan&c=liuyan&a=add&pc_hash=<?php echo $_SESSION['pc_hash'] ?>" class="btn btn-info">添加</a>
	<hr>
	<form action="?m=liuyan&c=liuyan&a=insert&pc_hash=<?php echo $_SESSION['pc_hash'] ?>" method="post">
		<div class="form-group">
			<label>用户名</label>
			<input type="text" name="name" class="form-control" placeholder="请输入用户名">
		</div>

		<div class="form-group">
			<label>电话</label>
			<input type="text" name="phone" class="form-control" placeholder="请输入电话">
		</div>
		<input type="submit" class="btn btn-primary" value="添加">
	</form>
</body>
</html>