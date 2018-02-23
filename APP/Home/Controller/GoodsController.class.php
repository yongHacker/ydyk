<?php
namespace Home\Controller;

use Think\Model;
use Home\Controller\PublicController;
class GoodsController extends PublicController{
  
    public function detail(){
        $id=intval($_GET['id']);
        if(empty($id)){
            exit();
        }
        $m=new Model();
        $table="my_goods";
        $where=array('gid'=>$id);
        $info=$m->table($table)->where($where)->find();
        
        $where['normid']=array('in',$info['normids']);
        $norms=$m->table('my_norms')->where($where)->select();
        
        $today=date('Y-m-d',time());
        $nextday=date('Y-m-d',strtotime("+3 day"));
        $this->assign('norms',$norms);
        $this->assign('js_norms',json_encode($norms));
        $this->assign('today',$today);
        $this->assign('nextday',$nextday);
        $this->assign('info',$info);
        $this->display('home/goodsDetail');
    }
    
    
    public function linpin(){
        $id=intval($_GET['id']);
        if(empty($id)){
            exit();
        }
        $m=new Model();
        $table="my_goods";
        $where=array('gid'=>$id);
        $info=$m->table($table)->where($where)->find();
        
        $where['normid']=array('in',$info['normids']);
        $norms=$m->table('my_norms')->where($where)->select();
        
        $today=date('Y-m-d',time());
        $nextday=date('Y-m-d',strtotime("+3 day"));
        $this->assign('norms',$norms);
        $this->assign('js_norms',json_encode($norms));
        $this->assign('today',$today);
        $this->assign('nextday',$nextday);
        $this->assign('info',$info);
        $this->display('home/lipinDetail');
    }
}
?>