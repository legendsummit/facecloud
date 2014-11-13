<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$Data = M('test'); // 实例化Data数据模型
        $this->data = $Data->select();
        $this->display();
    }
}