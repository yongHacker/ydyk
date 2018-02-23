<?php
namespace Admin\Controller;

use Admin\Controller\UploadController;
use Admin\Controller\PublicController;
use Think\Model;
class AdController extends PublicController{
    
    private $upload;
    public function __construct(){
        //引入父类的构造函数
        parent::__construct();
        $this->upload=new UploadController();
    }
    
    public function adList(){
        
        $m=new Model('ad');
        $count=$m->count();
        //分页
        $pageSize=8;  //每页显示条数
        $pageurl = 'index.php?m=admin&c=ad&a=adList&page=';
        $pageData=array('rowCount'=>$count,'pageSize'=>$pageSize,
            'pageurl'=>$pageurl);
        $startNum=$this->pagination($pageData);
        $list=$m->limit($startNum,$pageSize)->select();
        
        $this->assign('count',$count);
        $this->assign('list',$list);
        $this->display('admin/adList');
    }
    
    public function addAd() {
        
        $info['url']='javascript:void(0);';
        $this->assign('info',$info);
        $this->assign('url','index.php?m=admin&c=ad&a=addDeal');
        $this->display('admin/updateAd');
    }
    public function update() {
        $id=intval($_GET['id']);
        if(empty($id)){
            exit();
        }
        $where=array('aid'=>$id);
        $m=new Model('ad');
        $info=$m->where($where)->find();
        $this->assign('info',$info);
        $this->assign('url','index.php?m=admin&c=ad&a=updateDeal');
        $this->display('admin/updateAd');
    }
    
    public function addDeal(){
        $m=new Model('ad');
        $data=$m->create();
        $photo=$this->upload->uploadImg($_FILES['photo'], 'images');
        $d=array('url'=>'index.php?m=Admin&c=ad&a=addAd',
            'contant'=>"系统异常，添加广告失败。"
        );
        if($photo['num']=='1'){
            $data=$data+array('addtime'=>time(),'photo'=>$photo['url']);
            $f=$m->add($data);
            if($f){
                $d['url']='index.php?m=Admin&c=ad&a=adList';
                $d['contant']="添加广告成功。";
            }
        }else{
            $d['contant']=$photo['message'];
        }
        $this->tips($d);
    }
    
    public function updateDeal(){
        $aid=intval($_POST['aid']);
        if(empty($aid)){
            exit();
        }
        $m=new Model('ad');
        $data=$m->create();
        $where=array('aid'=>$aid);
        //print_r($data);
        $tips=array('url'=>'index.php?m=Admin&c=ad&a=adList',
            'contant'=>'系统异常，修改失败！'
        );
        if(empty($_FILES['photo']['name'])){
            $f=$m->where($where)->save($data);
        }else{
            $imgs=$this->upload->uploadImg($_FILES['photo'],'images');
            if($imgs['num']!='1'){
                $tips['contant']=$imgs['message'];
            }else{
                $data['photo']=$imgs['url'];
                $f=$m->where($where)->save($data);
            }
        }
    
        if($f){
            $tips['contant']='修改成功，正在跳转到广告列表页面！';
        }
        $this->tips($tips);
    }
    
    public function del() {
        $aid=intval($_GET['id']);
        $tip=array('url'=>'index.php?m=Admin&c=ad&a=adList',
            'contant'=>'系统异常，删除失败！'
        );
        if ($aid){
            $m=new Model('ad');
            $where=array('aid'=>$aid);
            $f=$m->where($where)->delete();
            if($f){
                $tip['contant']='删除成功！';
            }
        }
        $this->tips($tip);
    }
}