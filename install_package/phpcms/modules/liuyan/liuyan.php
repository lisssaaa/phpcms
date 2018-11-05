<?php
defined('IN_PHPCMS') or exit('No permission resources.');
//加载系统admin类
pc_base::load_app_class('admin','admin',0);
//定义user类
class liuyan extends admin{
	//加载user_model.class.php
	function __construct() {
		parent::__construct();
		$this->M = new_html_special_chars(getcache('liuyan', 'commons'));
		$this->db = pc_base::load_model('liuyan_model');
	}
	//方法
	public function init(){
		// echo "这是用户模块";
		//获取用户的数据
		// echo "<pre>";
		// var_dump($this->db->select());
		// var_dump($_SESSION);
		//获取数据
		$data=$this->db->select();
		//加载模板
		include $this->admin_tpl('liuyan_list');
	}

	//添加
	public function add(){
		// echo "this is add";
		//加载添加模板
		include $this->admin_tpl("liuyan_add");
	}

	//执行添加
	public function insert(){
		// echo "sm";
		if($this->db->insert($_POST)){
			// echo "ok";
			//跳转方法
			showmessage('添加ok',"?m=liuyan&c=liuyan&a=init");
		}else{
			// echo "error";
			showmessage("添加error","?m=liuyan&c=liuyan&a=add");
		}
	}

	//执行删除
	public function del(){
		//获取id
		$id=$_GET['id'];
		// echo $id;
		if($this->db->delete("id=$id")){
			showmessage("删除ok","?m=liuyan&c=liuyan&a=init");
		}else{
			showmessage("删除error","?m=liuyan&c=liuyan&a=init");

		}
	}

	//edit 获取需要修改的数据
	public function edit(){
		// echo $_GET['id'];
		$id=$_GET['id'];
		//获取需要修改数据
		$info=$this->db->get_one("id=$id");
		//加载模板
		include $this->admin_tpl("liuyan_edit");

	}

	//执行修改
	public function update(){
		// echo "<pre>";
		// var_dump($_POST);
		//方法一
		//删除id
		// $res=array_pop($_POST);
		// // var_dump($res);
		// // var_dump($_POST);
		// $data=$this->db->update($_POST,"id=$res");
		// if($data){
		// 	showmessage("修改ok","?m=user&c=user&a=init");
		// }else{
		// 	showmessage("修改error");
		// }
		//方法二
		//数组截取函数  -1 末尾元素对应得位置
		$id=array_splice($_POST,-1);
		// var_dump($id);
		// var_dump($_POST);
		$data=$this->db->update($_POST,$id);
		if($data){
			showmessage("修改ok","?m=liuyan&c=liuyan&a=init");
		}else{
			showmessage("修改error");
		}
	}
} 
 ?>