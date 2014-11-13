<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){ 
        $this->name = 'facecloud'; // 进行模板变量赋值
        $Data = M('test'); // 实例化Data数据模型
        $this->data=$Data->select();
        $this->display();
    }
}