<?php
namespace Admin\Controller;

use Admin\Controller\PublicController;
use Think\Model;
class OrderController extends PublicController{
    
    public function orderList() {
        $m=new Model();
        $state=$_GET['state'];
        $index=1;
        $table="my_user a,my_order b";
        if($state=='all'){
            $where="b.uid=a.uid";
        }else{
            $index=intval($state)+$index+1;
            $where="b.uid=a.uid and b.state=".intval($state);
        }
        $count=$m->table($table)->where($where)->count();
        
        //分页
        $pageSize=8;  //每页显示条数
        $pageurl = 'index.php?m=admin&c=order&a=orderList&state='.$state.'&page=';
        $pageData=array('rowCount'=>$count,'pageSize'=>$pageSize,
            'pageurl'=>$pageurl);
        $startNum=$this->pagination($pageData);
        
        $field="a.uname,b.*";
        $list=$m->table($table)
                ->where($where)->field($field)
                ->limit($startNum,$pageSize)->select();
        
        $this->assign('list',$list);
        $this->assign('count',$count);
        $this->assign('index',$index);
        $this->display('admin/orderList');
    }
    
    public function changeState(){
        $id=intval($_POST['id']);
        $state=intval($_POST['state']);
    
        $data=array(
            'num'=>0,
            'state'=>'',
            'msg'=>'修改失败'
        );
        switch ($state){
            case '1':$data['state']='已支付';break;
            case '2':$data['state']='已发货';break;
            case '3':$data['state']='已完成';break;
            case '4':$data['state']='已取消';break;
        }
        if($state >=0&&$state<=3&&$id){
            $m=new Model('order');
            $where=array('orid'=>$id);
            $d=array('state'=>$state);
            $f=$m->where($where)->save($d);
            if($f){
                $data['num']=1;
                $data['msg']='修改成功';
            }
        }
        $this->ajaxReturn($data);
    }
    
    public function updateUser() {
        $id=intval($_GET['id']);
        $where=array('infoid'=>$id);
        $m=new Model('userinfo');
        $info=$m->where($where)->find();
        $url="index.php?m=admin&c=order&a=updateUserDeal";
        $this->assign('url',$url);
        $this->assign('info',$info);
        $this->display('admin/updateUserInfo');
    }
    
    public function updateUserDeal(){
        $tips=array('url'=>'index.php?m=admin&c=order&a=orderList&state=all',
            'contant'=>'系统异常，修改失败！'
        );
        $m=new Model('userinfo');
        $data=$m->create();
        $f=$m->save($data);
        if($f){
            $tips['contant']='修改成功，正在跳转到列表页面！';
        }
        $this->tips($tips);
    }
    
    public function orderInfo() {
        $ornum=trim($_GET['ornum']);
        $m=new Model();
        $table="my_order a,my_user b,my_userinfo c";
        $where="a.uid=b.uid and a.infoid=c.infoid and a.ornum=".$ornum;
        $field="a.*,b.uname as name,c.*";
        $order=$m->table($table)->where($where)->field($field)->find();
        
        $orid=$order['orid'];
        $table="my_orderinfo a,my_goods b,my_norms c";
        $where="a.normid=c.normid and a.gid=b.gid and a.orid=".$orid;
        $field="a.num,b.gid,gname,b.photo as img,c.*";
        $goods=$m->table($table)->where($where)->field($field)->select();
        
        $this->assign('order',$order);
        $this->assign('goods',$goods);
        $this->display('admin/orderinfo');
    }
}