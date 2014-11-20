<?php
//管理员个人信息管理
namespace Manage\Controller;
use Think\Controller;
class InfoController extends CommonController {

    public function index(){
    	$this->data = M('admin')->select();
    	$this->display();
    }

    public function create(){
    	$this->display();
    }

    public function create_handle(){
    	$data = I('post.');
    	$data['password'] = md5($data['password']);
    	$Info = D('Info');
    	$Info -> add($data);
    	$this->success('新增成功', 'index');
    }

    public function edit(){
        $Admin = M('admin');
        $user = $_SESSION['admin'];
        $this->data = $Admin->where(array('user'=>$user))->find();
        $this->display();
    }

    public function edit_handle(){
        $data = I('post.');
        $Admin = M('admin');
        $old = $Admin->where(array('id'=>$data['id']))->find();
        if($data['password'] == null)
            //当提交的密码为空即不修改密码时
            $data['password'] = $old['password'];
        else
            $data['password'] = md5($data['password']);
        $Admin->where(array('id'=>$data['id']))->save($data);
        $_SESSION['admin'] = $data['user'];
        $this->redirect('show');
    }

    public function show(){
        $Admin = M('admin');
        $user = $_SESSION['admin'];
        $this->data = $Admin->where(array('user'=>$user))->find();
        $this->display();
    }
	
}
?>