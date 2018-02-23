<?php
namespace Home\Controller;
use Home\Model\UserModel;
use Think\Model;
use Home\Controller\PublicController;
class UserController extends PublicController{

    public function del(){
        $_SESSION['uname']=null;
        $_SESSION['uid']=null;
        $_SESSION['shopcar']=null;
        header('Location:/index.php');
    }
    /**
     * 用户登录
     */
    public function login(){
        $tip=array('num'=>'0','msg'=>"");
        $userModel=new UserModel();
        $data=$userModel->create();
        $return = $userModel->login($data);
        //echo $userModel->getLastSql();
        if ($return==0){
            $tip['msg']='用户不存在！';
        }else if ($return==1){
            $_SESSION['uname']=$data['uname'];
            $m=M('user');
            $uid = $m->where("uname='$_SESSION[uname]'")->getField('uid');
            $_SESSION['uid']=$uid;
            //$this->display('home/home');
            $tip['num']='1';
            $tip['msg']='登录成功';
        }else if($return==2){
            $tip['msg']='密码填写错误！';
        }
        echo json_encode($tip);
    }

    /**
     * 用户注册
     */
    public function register(){
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
            $tip['msg']='注册成功';
        }else{
            $tip['msg']='注册失败';
        }
        echo json_encode($tip);
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