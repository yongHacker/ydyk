<?php
namespace Admin\Controller;

use Admin\Controller\PublicController;
use Think\Model;
class UserController extends PublicController{
    
    public function userList(){
        $m=new Model('user');
        $count=$m->count();
        //分页
        $pageSize=8;  //每页显示条数
        $pageurl = 'index.php?m=admin&c=user&a=userList&page=';
        $pageData=array('rowCount'=>$count,'pageSize'=>$pageSize,
            'pageurl'=>$pageurl);
        $startNum=$this->pagination($pageData);
        $list=$m->limit($startNum,$pageSize)->select();
        
        $this->assign('count',$count);
        $this->assign('list',$list);
        $this->display('admin/userList');
    }
    
    public function updatePwd(){
        $uid=intval($_POST['uid']);
        $data=array('num'=>0,'msg'=>'修改失败');
        if(empty($uid)){
            exit();
        }
        $m=new Model('user');
        $data=$m->create();
        $salt=rand(10000,99999);
        $data['pwd']=md5($data['pwd'].$salt);
        $data['salt']=$salt;
        $where=array('uid'=>$uid);
        $flag=$m->where($where)->save($data);
        if($flag){
            $data=array('num'=>1,'msg'=>'修改成功');
        }
        echo json_encode($data);
    }
    
}