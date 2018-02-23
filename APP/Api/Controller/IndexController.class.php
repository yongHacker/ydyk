<?php
namespace Api\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        
    }
    public function pay(){
        $orid = $_GET['orid'];
        $m = M('order');
        $dindan = $m->where("orid='$orid'")->find();

        $this->assign('dindan',$dindan);
        $this->display('index/index');
    }
    public function pagepay(){
        Vendor('alipay.pagepay.pagepay');
    }
    public function return_url(){
        Vendor('alipay.return_url');
    }
}