<?php
namespace Home\Controller;
use Think\Model;
use Home\Controller\PublicController;
class BrandController extends PublicController{
    
    public function showEtong(){
        $this->display('home/ertongshengrihui');
    }
    
    public function brandStory(){
        
        $this->display('home/brandStory');
    }
    
    public function brandIdea(){
        $this->display('home/brandIdea');
    }
    
    public function brandTrip(){
        $this->display('home/brandTrip');
    }
    
    public function cakeList(){
        $id=intval($_GET['id']);
        if(empty($id)){
            $id=1;
        }
        $m=new Model();
        $where=array('upid'=>$id);
        $field="cid";
        $c=$m->table('my_classify')->where($where)->field($field)->select();
        $cids="";
        foreach ($c as $item){
            $cids .= $item['cid'].',';
        }
        $cids=substr($cids,0,-1);
        
        if($cids){
            $cids=$cids.','.$id;
            $where['cid']=array('in',$cids);
        }else{
            $where['cid']=$id;
        }
        $list=$m->table('my_goods')->where($where)->select();
        //print_r($list);
        $today=date('Y-m-d',time());
        $nextday=date('Y-m-d',strtotime("+3 day"));
        
        $this->assign('today',$today);
        $this->assign('nextday',$nextday);
        $this->assign('id',$id);
        $this->assign('list',$list);
        $this->display('home/cakelist');
    }
    
    public function lipinList(){
        $id=intval($_GET['id']);
        if(empty($id)){
            $id=6;
        }
        $m=new Model();
        $where=array('upid'=>$id);
        $field="cid";
        $c=$m->table('my_classify')->where($where)->field($field)->select();
        $cids="";
        foreach ($c as $item){
            $cids .= $item['cid'].',';
        }
        $cids=substr($cids,0,-1);
        
        if($cids){
            $cids=$cids.','.$id;
            $where['cid']=array('in',$cids);
        }else{
            $where['cid']=$id;
        }
        $list=$m->table('my_goods')->where($where)->select();
        //print_r($list);
        $today=date('Y-m-d',time());
        $nextday=date('Y-m-d',strtotime("+3 day"));
        
        $this->assign('today',$today);
        $this->assign('nextday',$nextday);
        $this->assign('id',$id);
        $this->assign('list',$list);
        $this->display('home/lipin');
    }
}
?>