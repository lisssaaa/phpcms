<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>查看留言</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/phpcms_v9_UTF8/install_package/statics/bs/css/bootstrap.min.css">
</head>
<body>
	<button class="btn btn-success">留言列表</button>|<a href="?m=user&c=user&a=add&pc_hash=<?php echo $_SESSION['pc_hash'] ?>" class="btn btn-info">添加</a> 
	<hr>
	<table class="table table-bordered table-hover">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PHONE</th>			
			<th>操作</th>
		</tr>
		<?php
		foreach($data as $row){ 
		 ?>
		 <tr>
		 	<td><?php echo $row['id'] ?></td>
		 	<td><?php echo $row['name'] ?></td>
		 	<td><?php echo $row['phone'] ?></td>		 	
		 	<td><a href="?m=user&c=user&a=del&id=<?php echo $row['id'] ?>&pc_hash=<?php echo $_SESSION['pc_hash'] ?>" class="btn btn-success">删除</a><a href="?m=user&c=user&a=edit&id=<?php echo $row['id'] ?>&pc_hash=<?php echo $_SESSION['pc_hash'] ?>" class="btn btn-info">修改</a></td>
		 </tr>
		 <?php } ?>
	</table>
</body>
</html>