<?php
// 数据库同步控制块
namespace Manage\Controller;
use Think\Controller;
class DatabaseController extends CommonController {
    public function index(){
	}
	//将person_images同步到本地数据库fl_imageurls中
	public function peopleimages(){
		$Person = M('person'); // 实例化Data数据模型
		//获得所有people
        $people = $Person->select();
        $ImageUrls=M('imageurls');	//实例化
        
        $ImageUrls->where('1')->delete(); //删除所有数据

        foreach ($people as $person) {
        	$Person=M('person');
            $person_info=$Person->where(array('name'=>$person['name']))->find();
        	$data=array();
            $data['pid']=$person_info['id'];
        	$data['name']=$person['name'];
        	//获取当前person的所有Faces
            $faces=getPersonFaceFromAPI($person['name']);
            $i=0;
            foreach ($faces['url'] as $url) {
                $data['url']=$url;
                $data['face_id']=$faces['face_id'][$i++];
                $ImageUrls->add($data);
            }
        }
        $this->redirect('Manage/Index/index');
	}
}
?>