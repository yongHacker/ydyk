<?php
namespace Admin\Controller;
use Admin\Controller\PublicController;
use Think\Model;
use Admin\Model\IPModel;
use Admin\Model\AdminuserModel;
class AdminController extends PublicController{
    
    public function addAdmin(){
        $m=new Model('auth_group');
        $field="id,title";
        $list=$m->field($field)->select();
        $this->assign('list',$list);
    	$this->assign('info','');
    	$this->assign('url','index.php?m=admin&c=admin&a=addDeal');
        $this->display('admin/updateAdmin');
    }
    
    public function update(){
        $uid=intval($_GET['uid']);
        if($uid){
            $m=new Model('auth_group');
            $field="id,title";
            $list=$m->field($field)->select();
            $this->assign('list',$list);
            
            $where=array('uid'=>$uid);
            $m=new AdminuserModel();
            $info=$m->where($where)->find();
            $this->assign('list',$list);
            $this->assign('info',$info);
            $this->assign('url','index.php?m=admin&c=admin&a=updateDeal');
            $this->display('admin/updateAdmin');
        }
    }
    
    public function adminList() {
        
        $group=new Model();
        $table="my_auth_group a,my_auth_group_access b";
        $field="a.title,b.uid";
        $where="a.id=b.group_id";
        $sort=$group->table($table)->field($field)
                ->where($where)->select();
        
        $m=new AdminuserModel();
        $count=$m->count();
        //分页
		$pageSize=8;  //每页显示条数
		$pageurl = 'index.php?m=admin&c=Admin&a=adminList&page=';
		$pageData=array('rowCount'=>$count,'pageSize'=>$pageSize,
				'pageurl'=>$pageurl);
		$startNum=$this->pagination($pageData);
		$list=$m->limit($startNum,$pageSize)->select();
		
		$this->assign('count',$count);
		$this->assign('list',$list);
		$this->assign('sort',$sort);
        $this->display('admin/adminList');
    }
    
    public function addDeal(){
        $m=new AdminuserModel();
        $data=$m->create();
        $data['auth_group']=$_POST['auth_group'];
        $salt=rand(10000,99999);
        $data['pwd']=md5($data['pwd'].$salt);
        $data['salt']=$salt;
        $data['addtime']=time();
        $flag=$m->addUser($data);
        if($flag=='1'){
            $data=array('url'=>'index.php?m=Admin&c=Admin&a=adminlist',
                'contant'=>'添加成功，正在跳转到管理员列表页面！'
            );
        }elseif ($flag=='0'){
            $data=array('url'=>'index.php?m=Admin&c=Admin&a=addAdmin',
                'contant'=>'用户名已存在，添加失败！'
            );
        }else {
            $data=array('url'=>'index.php?m=Admin&c=Admin&a=addAdmin',
                'contant'=>'系统异常，添加失败！'
            );
        }
        $this->tips($data);
    }
    public function updateDeal(){
        $uid=intval($_POST['uid']);
        if(empty($uid)){
            //print_r($_POST);
            exit();
        }
        $m=new AdminuserModel();
        $data=$m->create();
        $salt=rand(10000,99999);
        $data['pwd']=md5($data['pwd'].$salt);
        $data['salt']=$salt;
        $where=array('uid'=>$uid);
        $flag=$m->where($where)->save($data);
        
        $auth=new Model('auth_group');
        $d=array('group_id'=>$_POST['auth_group']);
        $auth->where($where)->save($d);
        
        $tip=array('url'=>'index.php?m=Admin&c=Admin&a=adminlist',
            'contant'=>'系统异常，修改失败！'
        );
        if($flag){
            $tip['contant']='修改成功，正在跳转到管理员列表页面！';
        }
        $this->tips($tip);
    }
    
    public function getIPs(){
        $m=new IPModel();
        $count=$m->count();
        //分页
        $pageSize=8;  //每页显示条数
        $pageurl = 'index.php?m=admin&c=Admin&a=getIPs&page=';
        $pageData=array('rowCount'=>$count,'pageSize'=>$pageSize,
            'pageurl'=>$pageurl);
        $startNum=$this->pagination($pageData);
        //$list=$m->limit($startNum,$pageSize)->select();
        $list=$m->getAdminIP($startNum,$pageSize);
        $this->assign('list',$list);
        $this->assign('count',$count);
        $this->display('admin/adminIPList');
    }
    
    public function del(){
        $uid=intval($_GET['uid']);
        $tip=array('url'=>'index.php?m=Admin&c=admin&a=adminList',
            'contant'=>'系统异常，删除失败！'
        );
        if ($uid==$_SESSION[AppName]['id']){
            $tip['contant']='删除失败,你正在使用系统，无法删除！';
        }else {
            $m=new AdminuserModel();
            $f=$m->del($uid);
            if($f){
                $tip['contant']='删除成功！';
            }
        }
        $this->tips($tip);
    }
}