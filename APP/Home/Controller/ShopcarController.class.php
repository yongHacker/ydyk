<?php
namespace Home\Controller;

use Home\Controller\PublicController;
use Think\Model;
class ShopcarController extends PublicController{
    
    
    public function shopcar(){
        $this->isLogin();
        $shopcar=session('shopcar');
        $shop=[];
        $num=0;
        $m=new Model();
        $amount=0;
        foreach ($shopcar as &$i){
            if(intval($i['num'])>0){
                $num=intval($i['num'])+$num;
                $where=array('gid'=>$i['gid']);
                $field="gid,gname,photo,normids";
                $s['goodsinfo']=$m->table('my_goods')
                        ->where($where)->field($field)->find();
                $s['goodsinfo']['num']=intval($i['num']);
                
                if($i['normid']==0){
                    $s1=$s['goodsinfo']['normids'];
                    $i['normid']=reset(explode(',',$s1));
                }
                $where=array('normid'=>$i['normid']);
                $field="normid,norname,price,weight1,weight2,enclosure";
                $s['norminfo']=$m->table('my_norms')
                    ->where($where)->field($field)->find();
                $amount=$amount+intval($s['norminfo']['price'])*intval($i['num']);
                $shop[]=$s;
            }
        }
        $this->assign('amount',$amount);
        $this->assign('shop',$shop);
        $this->assign('count',$num);
        $this->display('home/shopcar');
    }
    //添加到购物车
    public function addCar() {
        //session('uid',1);
        $uid=session('uid');
        if(empty($uid)){
            $res=array('num'=>0,'msg'=>'请登录后再购买');
            echo json_encode($res);
            exit();
        }
        $gid=intval($_POST['gid']);
        $normid=intval($_POST['normid']);
        $num=intval($_POST['num']);

        $shopcar=session('shopcar');
        
        $car=array('gid'=>$gid,'normid'=>$normid,'num'=>$num);
        if(empty($shopcar)){
            $shopcar[]=$car;
        }else{
            $f=false;
            foreach ($shopcar as &$i){
                if($i['gid']==$car['gid']&&$i['normid']==$car['normid']){
                     $i['num']=$i['num']+$num;
                     $f=true;
                     break;
                }
            }
            if(!$f){
                $shopcar[]=$car;
            }
        }
        session('shopcar',$shopcar);
        $count=$this->myCount();
        $res=array('num'=>1,'msg'=>'成功加入购物车','count'=>$count);
        //echo json_encode($res);
        $this->ajaxReturn($res);
    }
    
    public function delAll(){
        $_SESSION['shopcar']=null;
        $count=0;
        $res=array('num'=>1,'msg'=>'成功清空购物车','count'=>$count);
        echo json_encode($res);
    }
    
    public function del(){
        $id=intval($_POST['id']);
        $shopcar=session('shopcar');
        foreach ($shopcar as &$i){
            if(intval($i['gid'])==$id){
                $i['num']=0;
                break;
            }
        }
        session('shopcar',$shopcar);
        $res=array('num'=>1,'msg'=>'成功删除');
        echo json_encode($res);
    }

    public function ajax_setSession(){

    }

    public function confirm(){
        $this->isLogin();
        $shopcar=session('shopcar');
        $shop=[];
        $num=0;
        $m=new Model();
        $amount=0;
        foreach ($shopcar as &$i){
            if(intval($i['num'])>0){
                $num=intval($i['num'])+$num;
                $where=array('gid'=>$i['gid']);
                $field="gid,gname,photo,normids";
                $s['goodsinfo']=$m->table('my_goods')
                        ->where($where)->field($field)->find();
                $s['goodsinfo']['num']=intval($i['num']);
                
                if($i['normid']==0){
                    $s1=$s['goodsinfo']['normids'];
                    $i['normid']=reset(explode(',',$s1));
                }
                $where=array('normid'=>$i['normid']);
                $field="normid,norname,price,weight1,weight2,enclosure";
                $s['norminfo']=$m->table('my_norms')
                    ->where($where)->field($field)->find();
                $amount=$amount+intval($s['norminfo']['price'])*intval($i['num']);
                $shop[]=$s;
            }
        }
        
        $uid=session('uid');
        $where="uid=".$uid;
        $userinfo=$m->table('my_userinfo')->where($where)->select();
        $info=$m->table('my_userinfo')->where($where)->find();

        $this->assign('info_all',$userinfo);
        $this->assign('info_one',$info);
        $this->assign('amount',$amount);
        $this->assign('shop',$shop);
        $this->assign('count',$num);
        $this->display('home/shopcar2');
    }

    public function shopcar_ajax(){
        $arr = $_POST['orderlist'];
        $arr = json_decode($arr);
        $shop=[];
        foreach ($arr as &$i){
            if(intval($i[2])>0){
                $s['gid']=$i[0];
                $s['normid']=$i[1];
                $s['num']=$i[2];
                $shop[]=$s;
            }
        }
        session('shopcar',$shop);
        $res=array('num'=>1,'msg'=>'');
        $this->ajaxReturn($res);
    }
    
}