<?php 
namespace Home\Controller;
use Think\Controller;
class ManageController extends Controller {
	public function index(){
		header("Content-Type:text/html; charset=utf-8");
		
		if (session('?username')){
			$this->assign('username',session('username'));
			$this->display('ace/ajax');
		}
	}
}
?>