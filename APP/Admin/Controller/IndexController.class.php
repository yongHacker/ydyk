<?php
namespace Admin\Controller;
use Admin\Controller\PublicController;
use Think\Controller;
use Common\Common\utils;
use Think\Model;
use Admin\Model\IPModel;
class IndexController extends PublicController {
    
    private $utils;
    public function __construct(){
        //引入父类的构造函数
        parent::__construct();
        $this->utils=new utils();
    }
    
    public function index(){
        //$ip=$this->utils->getIPCity('123.125.114.144');
        //print_r($ip); 
        //echo strlen(session_id());
        $this->display('admin/admin');
    }
    
    public function exitAdmin(){
        $IP=new IPModel();
        $uinfo=session(AppName);
        $where=array('uid'=>$uinfo['id']);
        $d=array('state'=>0);
        $IP->where($where)->save($d);
        unset($_SESSION[AppName]);
        header("Location:index.php?m=admin&c=login&a=index");
        //$this->success('退出成功', 'admin/login');
    }
    
}
?>