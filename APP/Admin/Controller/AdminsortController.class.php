<?php
namespace Admin\Controller;
use Think\Model;
use Admin\Controller\PublicController;
class AdminsortController extends PublicController{
    
    public function addSort(){
        $m=new Model('auth_rule');
        $list=$m->select();
        //print_r($list);
        foreach ($list as &$item){
            $item['isCheck']='';
        }
        $this->assign('list',$list);
        $this->assign('info','');
        $this->assign('url','index.php?m=admin&c=Adminsort&a=addDeal');
        $this->display('admin/updateSort');
    }
    
    public function update(){
        $id=intval($_GET['id']);
        if($id){
            $l=new Model('auth_rule');
            $list=$l->select();
            
            $where=array('id'=>$id);
            $m=new Model('auth_group');
            $info=$m->where($where)->find();
            $rules=explode(',',$info['rules']);
            foreach ($list as &$item){
                if(in_array($item['id'], $rules)){
                    $item['isCheck']='checked';
                }else{
                    $item['isCheck']='';
                }
            }
            //print_r($rules);
            $this->assign('list',$list);
            $this->assign('info',$info);
            $this->assign('url','index.php?m=admin&c=Adminsort&a=updateDeal');
            $this->display('admin/updateSort');
        }
    }
    
    public function addDeal(){
        $m=new Model('auth_group');
        $data=$m->create();
        $rules=$_POST['rules'];
        $data['rules']=implode(',',$rules);
        //$data['rules']= $data['rules'].',';
        $flag=$m->add($data);
    
        if($flag){
            $tip=array('url'=>'index.php?m=Admin&c=Adminsort&a=sortList',
                'contant'=>'添加成功，正在跳转到角色列表页面！'
            );
        }else {
            $tip=array('url'=>'index.php?m=Admin&c=Adminsort&a=addSort',
                'contant'=>'系统异常，添加失败！'
            );
        }
        $this->tips($tip);
    
    }
    
    public function updateDeal(){
        $id=intval($_POST['id']);
        if(empty($id)){
            exit();
        }
        $m=new Model('auth_group');
        $data=$m->create();
        $rules=$_POST['rules'];
        $data['rules']=implode(',',$rules);
        //$data['rules']= $data['rules'].',';
        $where=array('id'=>$id);
        $flag=$m->where($where)->save($data);
        $tip=array('url'=>'index.php?m=Admin&c=Adminsort&a=sortList',
            'contant'=>'系统异常，信息没有修改！'
        );
        if($flag){
            $tip['contant']='修改成功，正在跳转到权限列表页面！';
        }
        $this->tips($tip);
    }
    
    public function sortList(){
        
        $m=new Model('auth_group');
        $count=$m->count();
        //分页
        $pageSize=8;  //每页显示条数
        $pageurl = 'index.php?m=admin&c=Adminsort&a=sortList&page=';
        $pageData=array('rowCount'=>$count,'pageSize'=>$pageSize,
            'pageurl'=>$pageurl);
        $startNum=$this->pagination($pageData);
        $list=$m->limit($startNum,$pageSize)->select();
        
        $this->assign('count',$count);
        $this->assign('list',$list);
        $this->display('admin/adminSort');
    }
    
    public function del() {
        $id=intval($_GET['id']);
        $tip=array('url'=>'index.php?m=admin&c=Adminsort&a=sortList',
            'contant'=>'系统异常，删除失败！'
        );
        if($id){
            $where=array('id'=>$id);
            $m=new Model('auth_group');
            $f=$m->where($where)->delete();
            if($f){
                $tip['contant']='删除成功！';
            }
        }
        $this->tips($tip);
    }
}