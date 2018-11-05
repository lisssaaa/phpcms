<?php
defined('IN_PHPCMS') or exit('No permission resources.');
class index {
	function __construct() {
		$this->db = pc_base::load_model('liuyan_model');
	}
	public function init() {
		// var_dump($_POST);
		// echo "这是留言";
		//插入数据
		if($this->db->insert($_POST)){
			showmessage("留言成功");
		}
	}	 
	
}
?>