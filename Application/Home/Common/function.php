<?php 

  //检查用户是否越权操作
  function check($uid){
    $id = I('id');
    $data = M('person')->where(array('id'=>$id,'uid'=>$uid))->find();
    if($data == null)
      return false;
    return ture;
  }

?>