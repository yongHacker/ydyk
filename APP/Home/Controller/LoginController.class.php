<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
class LoginController extends Controller{
    
    public function login(){
        $this->display('home/login');
    }
    
    public function registerDeal(){
        $tip=array('num'=>'0','msg'=>"");
        $check=trim($_POST['check']);
        if(!$this->check_verify($check)){
            $tip['msg']='验证码错误';
            echo json_encode($tip);
            exit();
        }
        $m=new UserModel();
        $data=$m->create();
        $f=$m->register($data);
        if($f=='-1'){
            $tip['msg']='账号已注册，请直接登录';
        }else if($f!='0'){
            $_SESSION['uid']=$f;
            $_SESSION['uname']=$data['uname'];
            $tip['num']='1';
            $tip['msg']='index.php';
        }else{
            $tip['msg']='注册失败';
        }
        echo json_encode($tip);
    }
    
    public function register(){
        $this->assign('uname',$_SESSION['uname']);
        $this->display('home/register');
    }
    /**检查验证码
     * @param $code
     * @return bool
     */
    private function check_verify($check){
        $verify = new \Think\Verify();
        return $verify->check($check);
    }
}