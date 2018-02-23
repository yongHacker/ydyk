<?php
namespace Admin\Controller;
use Admin\Model\ClassifyModel;
use Admin\Controller\PublicController;
class SortController extends PublicController{
    
    public function add(){
        $m=new ClassifyModel();
        $field="cid,cname1,level";
        $where="upid=0";
        $list=$m->field($field)->where($where)->select();
        $this->assign('list',$list);
        $this->assign('info','');
        $this->assign('url','index.php?m=admin&c=sort&a=addDeal');
        $this->display('admin/updateGoodsSort');
    }
    
    public function update(){
        $id=intval($_GET['id']);
        if($id){
            $m=new ClassifyModel();
            $where=array('cid'=>$id);
            $info=$m->where($where)->find();
            $field="cid,cname1,level";
            $where='upid =0 and level < '.$info['level'];
            $list=$m->field($field)->where($where)->select();
            $this->assign('list',$list);
            $this->assign('info',$info);
            $this->assign('url','index.php?m=admin&c=sort&a=updateDeal');
            $this->display('admin/updateGoodsSort');
        }
    }
    
    public function addDeal(){
        $m=new ClassifyModel();
        $data=$m->create();
        $data['addtime']=time();
        $f=false;
        $tip=array('url'=>'index.php?m=Admin&c=sort&a=sortList',
            'contant'=>'系统异常，添加失败，正在跳转到分类列表页面！'
        );
        if($data['upid']=='0'){
            $f=$m->add($data);
        }else{
            //print_r($data);
            $field="level";
            $where=array('cid'=>$data['upid']);
            $level=$m->where($where)->getField($field);
            $level=intval($level);
            if($level){
                $data['level']=$level+1;
                $f=$m->add($data);
            }
        }
        if($f){
            $tip['contant']='添加成功，正在跳转到分类列表页面！';
        }
        $this->tips($tip);
    }
    
    public function updateDeal(){
        $id=intval($_POST['cid']);
        if(empty($id)){
            exit();
        }
        $m=new ClassifyModel();
        $data=$m->create();
        $where=array('cid'=>$id);
        $f=false;
        if($data['upid']=='0'){
            $data['level']=1;
            $f=$m->where($where)->save($data);
        }else{
            $field="level";
            $where=array('cid'=>$data['upid']);
            $level=$m->where($where)->field($field)->find();
            $level=intval($level);
            if($level){
                $data['level']=$level+1;
                $f=$m->where($where)->save($data);
            }
        }
        $tip=array('url'=>'index.php?m=Admin&c=sort&a=sortList',
            'contant'=>'系统异常，信息没有修改！'
        );
        if($f){
            $tip['contant']='修改成功，正在跳转到分类列表页面！';
        }
        $this->tips($tip);
    }
    
    public function sortList(){
        $m=new ClassifyModel();
        $count=$m->count();
        
        $list=$m->select();
        
        $field="cid,cname1";
        $where=array('upid'=>0);
        $up=$m->where($where)->field($field)->select();
        
        $this->assign('url','index.php?m=admin&c=sort&a=search');
        $this->assign('count',$count);
        $this->assign('up',$up);
        $this->assign('list',$list);
        $this->display('admin/goodsSort');
    }
    
    public function search(){
        $w=$_POST['where'];
        $c=trim($_POST['contant']);
        if($w=='cid'){
            $where=array('cid'=>$c);
        }else{
            $where="cname1 like '%".$c."%' or cname2 like '%".$c."%'";
        }
        $m=new ClassifyModel();
        $count=$m->where($where)->count();
        if($count){
            $list=$m->where($where)->select();
            $field="cid,cname1";
            $where=array('upid'=>0);
            $up=$m->where($where)->field($field)->select();
            
            $this->assign('url','index.php?m=admin&c=sort&a=search');
            $this->assign('count',$count);
            $this->assign('c',$c);
            $this->assign('up',$up);
            $this->assign('list',$list);
            $this->display('admin/goodsSort');
        }else{
            $tip=array('url'=>'index.php?m=Admin&c=sort&a=sortList',
                'contant'=>'搜索结果为空，正在跳转到分类列表页面！'
            );
            $this->tips($tip);
        }
    }
    
    
}