<?php
	namespace Home\Controller;
	use Think\Controller;
	header("Content-type:text/html;charset=utf-8");
	class VerifyController extends Controller {
		public function login(){
			if(isset($_SESSION['user']))
				$this->redirect('Index/index');

			$this->note=I('note');
			$this->display();
		}

		public function login_handle(){
			$user = M('user');
			$data = I('post.');
			$data['password'] = md5($data['password']);
			$user = $user->where($data)->find();
			//管理员存在
			if($user){
				if($user['is_fobid']){
					redirect('login',0.5,'此账号被禁止');
				}
				else{
					$this->note = "登陆成功";
					$_SESSION['user']  = $data['user'];
					$this->redirect('Index/index');
				}
			}
			else{
				redirect('login',0.5,'用户或密码错误');
			}
		}

		public function logout(){
			session('user',null);
			$this->redirect('login');
		}
	}
?>