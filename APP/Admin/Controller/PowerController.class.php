<?php
namespace Admin\Controller;
use Think\Model;
use Admin\Controller\PublicController;
class PowerController extends PublicController{
  
    public function addPower(){
        $this->assign('info','');
        $this->assign('url','index.php?m=admin&c=power&a=addDeal');
        $this->display('admin/updatePower');
    }
    
    public function update(){
        $id=intval($_GET['id']);
        if($id){
            $where=array('id'=>$id);
            $m=new Model('auth_rule');
            $info=$m->where($where)->find();
            $this->assign('info',$info);
            $this->assign('url','index.php?m=admin&c=power&a=updateDeal');
            $this->display('admin/updatePower');
        }
    }
    
    public function addDeal(){
        $m=new Model('auth_rule');
        $m->create();
        $flag=$m->add();
        
        if($flag){
            $tip=array('url'=>'index.php?m=Admin&c=power&a=powerList',
                'contant'=>'添加成功，正在跳转到权限资源列表页面！'
            );
        }else {
            $tip=array('url'=>'index.php?m=Admin&c=power&a=addPower',
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
        $m=new Model('auth_rule');
        $data=$m->create();
        $where=array('id'=>$id);
        $flag=$m->where($where)->save($data);
        $tip=array('url'=>'index.php?m=Admin&c=power&a=powerList',
            'contant'=>'系统异常，信息没有修改！'
        );
        if($flag){
            $tip['contant']='修改成功，正在跳转到权限列表页面！';
        }
        $this->tips($tip);
    }
    
    public function powerList(){
        
        $m=new Model('auth_rule');
        $count=$m->count();
        //分页
        $pageSize=8;  //每页显示条数
        $pageurl = 'index.php?m=admin&c=power&a=powerList&page=';
        $pageData=array('rowCount'=>$count,'pageSize'=>$pageSize,
            'pageurl'=>$pageurl);
        $startNum=$this->pagination($pageData);
        $list=$m->limit($startNum,$pageSize)->select();
        
        $this->assign('count',$count);
        $this->assign('list',$list);
        $this->display('admin/powerList');
    }
    
    public function changeStatus(){
        $id=intval($_POST['id']);
        $data=array('num'=>0,'msg'=>'修改失败');
        if($id){
            $where=array('id'=>$id);
            $m=new Model('auth_rule');
            $info=$m->where($where)->find();
            $d=array('status'=>!$info['status']);
            $f=$m->where($where)->save($d);
            if($f){
                $data=array('status'=>!$info['status'],'num'=>1,'msg'=>'修改成功');
            }
        }
        echo json_encode($data);
    }
    
    public function del(){
        $id=intval($_GET['id']);
        $tip=array('url'=>'index.php?m=Admin&c=power&a=powerList',
            'contant'=>'系统异常，删除失败！'
        );
        if(empty($uid)){
    
        }else {
            /*
            $m=new Model('auth_rule');
            //$f=$m->del($id);
            if($f){
                $tip['contant']='删除成功！';
            }
            */
        }
        $this->tips($tip);
    }
}
?>