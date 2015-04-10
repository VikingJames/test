<?php
namespace Home\Controller;
use Think\Controller;
use Think\Crypt\Driver\Think;
class LoginController extends Controller {

    public function login(){
    	header("Content-Type:text/html; charset=utf-8");
    	
		$user = M('User');
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		if (!$this->checkItem($username)){
			$this->error('用户名长度必须在6~15个字符之间');
		}
		
		if ($user->where("username='$username' AND password='$password'")->find()){
			session(username, $username);
			$url=U('Manage/index');
			redirect($url,0,'跳转中。。。');
		}else {
			$this->error('用户名或密码错误');
		}
    }
    
    private function checkItem($data){
    	if (strlen($data)>15 || strlen($data)<6){
    		return false;
    	}
    	return true;
    }
}
?>