<?php
namespace Home\Controller;

use Think\Controller;
class PublicController extends Controller{
    
    //****************
    //构造函数
    //****************
    public function __construct(){
        //引入父类的构造函数
        parent::__construct();
        //计算购物车数量
        $this->init();
    }
    
    private function init(){
        $uname=session('uname');
        $count=$this->myCount();
        $this->assign('count',$count);
        $this->assign('uname',$uname);
    }
    
    protected function isLogin(){
        $uid=session('uid');
        if (empty($uid)){
            header('Location:index.php?m=home&c=login&a=login');
            exit();
        }
    }
    
    protected function myCount(){
        $uid=session('uid');
        $shopcar=session('shopcar');
        $num=0;
        if($uid){
            foreach ($shopcar as $i){
                if(intval($i['num'])>=0){
                    $num=intval($i['num'])+$num;
                }
            }
        }
        return $num;
    }

    /**
     *输出系统提示
     *@param array $data
     */
    public function tips($data) {

        $data['title'] = $data['title'] ? $data['title'] : '系统提示-信息提示';
        $data['contant'] = $data['contant'] ? $data['contant'] : '系统提示';
        $data['time'] = $data['time'] ? $data['time'] : 5;
        $data['url'] = $data['url'] ? $data['url'] : 'index.php?m=Admin&c=index&a=welcome';
        $this->assign('title',$data['title']);
        $this->assign('contant',$data['contant']);
        $this->assign('time',$data['time']);
        $this->assign('url',$data['url']);
        //$this->display('Admin/tips');
        $this->display('admin/tips');//确保能跨模块调用
        exit();
    }

    /**
     * 设置分页
     * @param array $data
     * @return int startNum
     */
    public function pagination($data){
        //分页
        $pageNow=$_GET['page'];    //当前页数
        $pageNow=(int)$pageNow;

        $rowCount=$data['rowCount'];   //记录总条数
        $pageSize=$data['pageSize'];  //每页显示条数
        $pageNum=ceil($rowCount/$pageSize);    //总页数
        if(empty($pageNow)||$pageNow>$pageNum||$pageNow<1){
            $pageNow=1;
        }
        $startNum=($pageNow-1)*$pageSize;   //每页起始数
        $pageurl=$data['pageurl'];

        $this->assign('pageNow',$pageNow);
        $this->assign('pageNum',$pageNum);
        $this->assign('pageurl',$pageurl);
        $this->assign('pageUp',$pageNow-1);
        $this->assign('pageDown',$pageNow+1);
        return $startNum;
    }
}
?>