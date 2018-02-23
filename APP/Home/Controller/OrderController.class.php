<?php
namespace Home\Controller;

use Home\Controller\PublicController;
use Think\Model;
use Home\Model\OrderModel;
class OrderController extends PublicController{
    
    public function __construct(){
        //引入父类的构造函数
        parent::__construct();
        //计算购物车数量
        $this->isLogin();
    }
    
    public function postInfo() {
        $m=new Model('userinfo');
        $infoid=$_POST['id'];
        $data=$m->create();
        //print_r($_SESSION);
        $data['uid']=session('uid');
        //print_r($data);
        $res=array('num'=>0,'msg'=>'添加详细失败');
        if(empty($id)){
            $id=$m->add($data);
            $res['id']=$id;
        }else{
            $where['infoid']=$infoid;
            $id=$m->where($where)->save($data);
            $res['id']=$infoid;
        }
        if($id){
            $res['num']=1;
        }
        echo json_encode($res);
    }
    
    public function postOrder(){
        $m=new OrderModel();
        $amount=0;
        $shopcar=session('shopcar');
        $orderinfo=[];
        foreach ($shopcar as &$i){
            if(intval($i['num'])>0){
                $s['gid']=intval($i['gid']);
                $s['num']=intval($i['num']);
                if($i['normid']==0){
                    $where=array('gid'=>$i['gid']);
                    $normids=$m->table('my_goods')
                        ->where($where)->getField('normids');
                    $i['normid']=reset(explode(',',$normids));
                }
                $s['normid']=intval($i['normid']);
                $where=array('normid'=>$i['normid']);
                $price=$m->table('my_norms')->where($where)->getField('price');
                $amount=$amount+intval($price)*intval($i['num']);
                $orderinfo[]=$s;
            }
        }
        $order['amount']=$amount;
        $order['ornum']=time();
        $order['addtime']=time();
        $order['info']=trim($_POST['myinfo']);
        $order['uid']=session('uid');
        $order['infoid']=$_POST['id'];
        //print_r($order);
        //print_r($orderinfo);

        $res=array('num'=>0,'msg'=>'提交订单失败');
        $f=$m->addData($order, $orderinfo);
        //print_r($_SESSION);
        if($f=='1'){
            $_SESSION['shopcar']=null;
            $res['msg']='提交订单成功';
            $res['num']=1;
        }
        echo json_encode($res);

    }
    
    public function payOrder() {
        $orid=$_SESSION['orid'];

        if(empty($orid)){
            exit();
        }
        $_SESSION['orid']=null;
        $where=array('orid'=>$orid);
        $m=new OrderModel();
        $order=$m->where($where)->find();
        //dump($order);exit;
        $this->assign('order',$order);
        $this->display('home/shopcar3');

    }
}