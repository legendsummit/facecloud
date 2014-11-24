<?php 
  namespace Home\Controller;
  use Think\Controller;
  class UserController extends Controller {
    public function index(){
      $this->data = M('user')->select();
      $this->display();
    }

    public function create(){
      $this->display();
    }

    public function create_handle(){
      $data = I('post.');
      $data['password'] = md5($data['password']);
      $Info = D('user');
      $Info -> add($data);
      $this->success('新增成功', 'show');
    }

    public function edit(){
        $User = M('user');
        $user = $_SESSION['user'];
        $this->data = $User->where(array('user'=>$user))->find();
        $this->display();
    }

    public function edit_handle(){
        $data = I('post.');
        $User = M('user');
        $old = $User->where(array('id'=>$data['id']))->find();
        if($data['password'] == null)
            //当提交的密码为空即不修改密码时
            $data['password'] = $old['password'];
        else
            $data['password'] = md5($data['password']);
        $User->where(array('id'=>$data['id']))->save($data);
        $_SESSION['user'] = $data['user'];
        $this->redirect('show');
    }

    public function show(){
        $User = M('user');
        $user = $_SESSION['user'];
        $this->data = $User->where(array('user'=>$user))->find();
        $this->display();
    }
  
  }

?>