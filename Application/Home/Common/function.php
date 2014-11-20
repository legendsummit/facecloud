<?php 

  //检查用户是否越权操作
  function check($user){
    $id = I('id');
    $data = M('person')->where(array('id'=>$id,'user'=>$user))->find();
    if($data == null)
      return false;
    return ture;
  }

?>