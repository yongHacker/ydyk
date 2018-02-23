<?php
namespace Home\Controller;
use Think\Model;
use Home\Controller\PublicController;
class IndexController extends PublicController {
    public function index(){
        $m=new Model();
        $where=array('position'=>0);
        $ad=$m->table('my_ad')->where($where)->select();
        
        $where=array('position'=>1);
        $goodsAd=$m->table('my_ad')->where($where)->select();
        
        $where="state=1";
        $field="gid,gname,photo,taste";
        $goods=$m->table('my_goods')->field($field)
                 ->where($where)->limit(0,6)->select();
        
        $today=date('Y-m-d',time());
        $nextday=date('Y-m-d',strtotime("+3 day"));
        
        $this->assign('uname',$_SESSION['uname']);
        
        $this->assign('today',$today);
        $this->assign('nextday',$nextday);
        $this->assign('ad',$ad);//首页展示
        $this->assign('goodsad',$goodsAd);//轮播展示
        $this->assign('goods',$goods);//产品展示
        $this->display('home/home');
    }
    
    public function web(){
        $this->display('home/wangzhandaohan');
    }
    
    public function guide(){
        $this->display('home/dinggouzhinan');
    }
    
    public function berries(){
        $this->display('home/berries');
    }
}
?>