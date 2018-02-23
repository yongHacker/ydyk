<?php
namespace Admin\Controller;
use Admin\Controller\PublicController;
use Think\Model;
use Common\Common\utils;
use Admin\Model\AdminuserModel;
use Admin\Model\IPModel;
use Think\Exception;
class LoginController extends PublicController {
    
    //****************
    //构造函数
    //****************
    private $utils;
    public function __construct(){
        //引入父类的构造函数
        parent::__construct();
        $this->utils=new utils();
        
    }
    
    //展示登录页面
    public function index(){
        //echo session_id();
        $name=$_COOKIE[AppName.'name'];
        $pwd=$_COOKIE['passwd'];
        if(empty($name)||empty($pwd)){
            $this->assign('name','');
            $this->assign('pwd','');
        }else{
            $passwd=$this->utils->decode($pwd,'jiang');
            $this->assign('name',$name);
            $this->assign('pwd',$passwd);
        }
        $this->display('admin/login');
    }
    
    //登录处理
    public function login(){
        $check=trim($_POST['check']);
        $tip=array('url'=>'index.php?m=Admin&c=login&a=index',
            'contant'=>""
        );
        if(!$this->check_verify($check)){
            $tip['contant']='验证码错误！';
            $this->tips($tip);
            exit();
        }
        $m=new AdminuserModel();
        $data=$m->create();
        $flag=$m->login($data);
        
        if($flag=='1'){
            $ip=new IPModel();
            $userip=$this->utils->getIP();
            //$userip="119.29.79.62";
            $address=$this->utils->getIPCity($userip);
            if($address){
                $info=$address['country'].'-'.$address['province'].'-'.$address['city'];
            }
            $d=array(
                'uid'=>$_SESSION[AppName]['id'],
                'ip'=>$userip,
                'lastTime'=>time(),
                'address'=>$info,
                'session_id'=>session_id(),
                'state'=>1
            );
            $ip->addIP($d);
            $tip['url']='index.php?m=Admin';
            $tip['contant']='登录成功，正在为你跳转！';
            $tip['time']=3;
            if($_POST['remember']=='1'){
                $this->remember($data['uname'], $data['pwd']);
            }
        }elseif ($flag=='2'){
            $tip['contant']='用户已登录，请十分钟后尝试登录！';
        }else{
            $tip['contant']='登录失败，用户或密码错误！';
        }
        $this->tips($tip);
    }
    
    public function remember($name,$pwd){
        $passwd=$this->utils->encode($pwd,'jiang');
        setcookie(AppName.'name',$name,time()+3600*24*7);
        setcookie('passwd',$passwd,time()+3600*24*7);
    }
    
    public function checkImg($t=''){
        ob_clean();
        $Verify =     new \Think\Verify();
        // 设置验证码字符为纯数字
        $Verify->codeSet = '0123456789';
        $Verify->fontSize = 37;
        $Verify->length   = 3;
        $Verify->useNoise = false;
        $Verify->entry();
    }
    // 检测输入的验证码是否正确，$code为用户输入的验证码字符串
    private function check_verify($check){
        $verify = new \Think\Verify(array('reset'=>false));
        return $verify->check($check);
    }

    public function ajax_code(){
        $code = $_POST['code'];
        echo $this->check_verify($code);
    }
}
?>