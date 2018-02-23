<?php
namespace Admin\Controller;
use Think\Model;
use Admin\Model\IPModel;
use Admin\Model\AdminuserModel;
use Common\Common\utils;
class SystemController extends PublicController{
    
    //****************
    //构造函数
    //****************
    private $utils;
    public function __construct(){
        //引入父类的构造函数
        parent::__construct();
        $this->utils=new utils();
        
    }
    
    public function index(){
        $m=new IPModel();
        $list=$m->getAdminIP();
        $this->assign('list',$list);
        $this->display('admin/system');
    }
    
    public function updatePwd() {
        $uid=intval($_POST['uid']);
        $pwd=$_POST['pwd'];
        $data=array('num'=>0,'msg'=>'修改失败');
        if($uid&&$pwd){
            $where=array('uid'=>$uid);
            $salt=rand(10000,99999);
            $data=array('pwd'=>md5($pwd.$salt),'salt'=>$salt);
            $m=new AdminuserModel();
            $flag=$m->where($where)->save($data);
            if($flag){
                $data=array('num'=>1,'msg'=>'修改成功');
            }
        }
        echo json_encode($data);
    }
}