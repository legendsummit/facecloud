<?php
// 数据库同步控制块
namespace Manage\Controller;
use Think\Controller;
class DatabaseController extends Controller {
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
        	//var_dump($person);
        	$data=array();
        	$data['name']=$person['name'];
        	//获取当前person的所有URL
        	$urls=getPersonImageUrlFromAPI($person['name']);
        	foreach ($urls as $url) {
        		$data['url']=$url;
        		$ImageUrls->add($data);
        	}
        }
        echo 'success!';
	}
}