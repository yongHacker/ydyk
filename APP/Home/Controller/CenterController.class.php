<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
use Home\Controller\PublicController;
use Home\Model\UserModel;
use Home\Model\UserinfoModel;
use Think\Model;

class CenterController extends PublicController{
    /**
     * 会员登录首页
     */
    public function index(){
        //print_r($_SESSION);
        if($_SESSION['uname']){
            $this->assign('uname',$_SESSION['uname']);
            $this->display('center/center');
        }else {
            $this->assign('uname', $_SESSION['uname']);
            $this->display('center/user');
        }
    }

    /**
     * 会员登录
     */
    public function login(){
        $tips = new PublicController();
        $tip=array('url'=>'index',
            'contant'=>""
        );
        $data=I('post.');
        $userModel=new UserModel();
        $return = $userModel->login($data);
        if ($return==0){
            $tip['contant']='用户不存在！';
            $tips->tips($tip);
            exit();
        }elseif ($return==1){
            $_SESSION['uname']=$data['uname'];
            $m =  M('user');
            $uid = $m->where("uname='$_SESSION[uname]'")->field('uid')->find();
            $_SESSION['uid']=$uid['uid'];
            $this->assign('uname',$_SESSION['uname']);
            $this->display('center/center');
        }elseif($return==2){
            $tip['contant']='密码填写错误！';
            $tips->tips($tip);
            exit();
        }
    }

    /**
     * 会员注册
     */
    public function register(){
        $tips = new PublicController();
        $tip=array('url'=>'index',
            'contant'=>""
        );

        $code = I('post.code');
        if (!$this->check_verify($code)){
            $tip['contant']='验证码错误！';
            $tips->tips($tip);
            exit();
        }
        $data=array(
            'uname'=>I('post.unameReg'),
            'pwd'=>I('post.pwdReg'),
            'pwdConfirm'=>I('post.pwdConfirm'),
            'code'=>I('post.code'),
            'user_mobile_captcha'=>I('post.user_mobile_captcha'),
        );
        if($data['pwd']!==$data['pwdConfirm']){
            $tip['contant']='两次密码输入不一致！';
            $tips->tips($tip);
            exit();
        }
        $userModel = new UserModel();
        $return = $userModel->register($data);
        if ($return==0){
            $tip['contant']='用户名已存在！';
            $tips->tips($tip);
            exit();
        }elseif($return==1){
            $tip['contant']='注册失败！';
            $tips->tips($tip);
            exit();
        }else{
            $tip['contant']='注册成功！';
            $tips->tips($tip);
            exit();
        }



    }

    /**
     * 会员收货地址
     */
    public function address(){
        $tips = new PublicController();
        $tip=array('url'=>'index.php?m=home&c=center&a=address',
            'contant'=>""
        );

        $act=$_GET['act'];
        $data = I('post.');
        if($act=='editAddress'){
            if($data['address']) {
                $add_address = array(
                    'uphone' => $data['uphone'],
                    'uname' => $data['uname'],
                    'city'=>  $data['province'].$data['city'].$data['district'],
                    'address' => $data['address'],
                    'flag' => $data['flag'] ? intval($data['flag']) : 0,
                    'uid' => $_SESSION['uid'],
                );
                $user_info = new UserinfoModel();
                if (!$user_info->add_array($add_address)) {
                    $tip['contant'] = '收货地址添加失败！';
                    $tips->tips($tip);
                    exit();
                }
                $tip['contant'] = '收货地址添加成功！';
                $tips->tips($tip);
            }else{
                echo "<script>alert('请填写收货地址！');window.history.back()</script>";
            }
        }else{
            $addresses = new UserinfoModel();
            $rows = $addresses->selectAll();

            $this->assign('uname',$_SESSION['uname']);
            $this->assign('rows',$rows);
            $this->display('center/address');
        }

    }

    /**
     * 修改密码页
     */
    public function editPwd(){
        $act = $_GET['act'];
        if ($act=='editPwd'){
            $data = I('post.');
            $user = new UserModel();
            $res = $user->editPwd($data);
            echo "<script>alert('{$res}');window.history.back()</script>";
        }else{
            $this->display('center/editPwd');
        }

    }

    /**
     * 个人资料页
     */
    public function information(){
        $act = $_GET['act'];
        if ($act=='editInfo'){
            $data = I('post.');
            $user = new UserModel();
            $res = $user->editInfo($data);
            if ($res<0){
                echo "<script>alert('修改资料失败');window.history.back()</script>";
            }
            echo "<script>alert('修改资料成功');window.history.back()</script>";
        }else{
            $user = new UserModel();
            $row = $user->selectInfo();

            $this->assign('row',$row);
            $this->display('center/information');
        }

    }

    /**
     * 订单页
     */
    public function order(){
        $act = $_GET['act'];
        if ($act=='seeOrder'){
            $uid=$_SESSION['uid'];
            $orid=$_GET['orid'];
            $m=new Model();
//            订单信息
            $table="my_user a,my_order b";
            $where="a.uid=b.uid AND b.uid='$uid' AND orid='$orid'";
            $list=$m->table($table)
                ->where($where)
                ->select();
//            商品具体信息
            $table="my_orderinfo a,my_goods b,my_norms c";
            $where="a.normid=c.normid and a.gid=b.gid and a.orid =".$orid;
            $field="a.num,b.gid,b.gname,b.photo as img,c.*";
            $g=$m->table($table)->where($where)->field($field)->select();
            $goods[$orid]=$g;
//            收货地址信息
            $table="my_order a,my_userinfo b";
            $where="a.infoid=b.infoid AND a.orid=".$orid;
            $field="a.amount,b.*";
            $address = $m->table($table)->where($where)->field($field)->find();


            $this->assign('goods',$goods);
            $this->assign('list',$list);
            $this->assign('address',$address);
            $this->display('center/seeOrder');

        }elseif($act=='delOrder'){
            $orid=$_GET['orid'];
            $m = M('order');
            $res = $m->where("orid='$orid'")->delete();
            if (!$res){
                echo "<script>alert('删除订单失败');window.history.back();</script>";
            }
            echo "<script>alert('删除订单成功');</script>";
            header('Location:index.php?m=home&c=center&a=order');

        }
        elseif ($act=='haspay'){
            $ornum = $_GET['ornum'];
            $state = array('state'=>1);
            $m=M('order');
            $m->where("ornum='$ornum'")->save($state);
            $this->display('center/center');

        }else{
            $uid=$_SESSION['uid'];
            $m=new Model();
            $table="my_user u,my_order o";
            $where="u.uid=o.uid AND o.uid='$uid'";

            $count=$m->table($table)->where($where)->count();

            //分页
            $pageSize=4;  //每页显示条数
            $pageurl = 'index.php?m=home&c=center&a=order&page=';
            $pageData=array('rowCount'=>$count,'pageSize'=>$pageSize,
                'pageurl'=>$pageurl);
            $startNum=$this->pagination($pageData);

            $field="u.uname,o.*";
            $list=$m->table($table)
                ->where($where)->field($field)
                ->limit($startNum,$pageSize)->select();

            $goods=[];
            foreach ($list as $item){
                $orid=$item['orid'];
                $table="my_orderinfo a,my_goods b,my_norms c";
                $where="a.normid=c.normid and a.gid=b.gid and a.orid =".$orid;
                $field="a.num,b.gid,b.gname,b.photo as img,c.*";
                $g=$m->table($table)->where($where)->field($field)->select();
                $goods[$orid]=$g;
            }

            $this->assign('goods',$goods);
            $this->assign('list',$list);
            $this->assign('count',$count);
            $this->display('center/order');

        }

    }


    /**
     * 留言页
     */
    public function liuyan(){
        $this->display('center/liuyan');
    }

    /**
     * ajax返回收货地址
     */
    public function ajax_address(){
        $infoid = array('infoid'=>$_POST['infoid']);
        $is_default = array('flag'=>1);
        $is_default1 = array('flag'=>0);
        $m = M('userinfo');
        $where['uid']=$_SESSION['uid'];
        $m->where($where)->save($is_default1);
        $res = $m->where($infoid)->save($is_default);
        if(!$res){
            echo 0;
        }
        echo 1;
    }

    /**
     * 点金说明页
     */
    public function dianjin(){
        $this->display('center/dianjin');
    }

    /**
     * 生成短信验证码ajax返回
     */
    public function ajax_return(){
        $rand = mt_rand(1000,9999);
        $this->ajaxReturn($rand);
    }

    /**
     * 生成验证码
     */
    public function verify_img(){
        $config = array(
            'fontSize'=>24,
            'length'=>4,
            'useCurve'=>false,
        );
        $Verify = new Verify($config);
        $Verify->entry();
    }

    /**检查验证码
     * @param $code
     * @return bool
     */
    function check_verify($code){
        $verify = new Verify();
        return $verify->check($code);
    }
}