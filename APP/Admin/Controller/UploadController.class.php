<?php
namespace Admin\Controller;

use Admin\Controller\PublicController;
use Think\Model;
class UploadController extends PublicController{
    
    //****************
    //构造函数
    //****************
    
    //文件保存目录路径,物理地址
    private $save_path;
    
    //文件保存目录URL，网络地址
    private $save_url;
    
    private $dir;
    //最大文件大小
    private $max_size = 2000000;//2 Mb
    
    //定义允许上传的文件扩展名
    private $ext_arr = array('gif', 'jpg', 'jpeg', 'png', 'bmp');
    
    public function uploadImg($file,$dir){
        //$file=$_FILES['imgFile'];
        //print_r($file);
        $this->dir=$dir;
        $this->save_path=upload.$dir.'/';
        $this->save_url=upload_url.$dir.'/';
        //$this->upload($file);
        if(empty($file['tmp_name'])){
            return array('num' => -1, 'message' => '文件不存在');
        }else {
            return $this->md5file($file);
        }
        
    }
    
    private function upload($file,$md5file){
    	$save_path=$this->save_path;
    	$save_url=$this->save_url;
    	$dir=$this->dir.'/';
    	$error=array();
        //有上传文件时
        if (empty($file) === false) {
            //原文件名
            $file_name = $file['name'];
            //服务器上临时文件名
            $tmp_name = $file['tmp_name'];
            //文件大小
            $file_size = $file['size'];
            //检查文件名
            if (!$file_name) {
                $error=$this->alert("请选择文件。");
            }
            //检查目录
            if (@is_dir($save_path) === false) {
                $error=$this->alert("上传目录不存在。");
            }
            //检查目录写权限
            if (@is_writable($save_path) === false) {
                $error=$this->alert("上传目录没有写权限。".$save_url);
            }
            //检查是否已上传
            if (@is_uploaded_file($tmp_name) === false) {
                $error=$this->alert("临时文件可能不是上传文件。");
            }
            //检查文件大小
            if ($file_size > $this->max_size) {
                $error=$this->alert("上传文件大小超过限制。");
            }
            //获得文件扩展名
            $temp_arr = explode(".", $file_name);
            $file_ext = array_pop($temp_arr);
            $file_ext = trim($file_ext);
            $file_ext = strtolower($file_ext);
            //检查扩展名
            if (in_array($file_ext, $this->ext_arr) === false) {
                $error=$this->alert("上传文件扩展名是不允许的扩展名。");
            }
            //创建文件夹
            $ymd = date("Ymd");
            $save_path .= $ymd . "/";
            $save_url .= $ymd . "/";
            $dir .= $ymd . "/";
            if (!file_exists($save_path)) {
                mkdir($save_path);
            }
            //新文件名
            $new_file_name = date("YmdHis") . '_' . rand(10000, 99999) . '.' . $file_ext;
            //移动文件
            $file_path = $save_path . $new_file_name;
            if (move_uploaded_file($tmp_name, $file_path) === false) {
                $error=$this->alert("上传文件失败。");
            }
            if($error){
                return $error;
                $this->exitupload();
            }
            @chmod($file_path, 0644);
            $file_url = $save_url . $new_file_name;
            $dir .= $new_file_name;
            $m=new Model('file');
            $data=array(
            		'save_path'=>$dir,
            		'MD5file'=>$md5file,
            		'addtime'=>time(),
            		'file_size'=>$file_size/1024
            );
            $m->add($data);
            return array('num' => 1, 'url' => $dir);
            $this->exitupload();
        }
    }
    
    private function alert($msg) {
        
    	return array('num' => -1, 'message' => $msg);
    }
    
    private function exitupload(){
    	$this->save_path='';
    	$this->save_url='';
    	$this->dir='';
    	exit();
    }
    
    private function md5file($file){
    	$m=new Model('file');
    	$md5file=md5_file($file['tmp_name']);
    	$where=array('MD5file'=>$md5file);
    	$info=$m->where($where)->find();
    	if(empty($info)){
    		return $this->upload($file,$md5file);
    	}else{
    		return array('num' => 1, 'url' => $info['save_path']);
    		$this->exitupload();
    	}
    }
}