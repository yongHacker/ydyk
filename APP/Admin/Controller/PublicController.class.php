<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
use Admin\Model\IPModel;
class PublicController extends Controller{

    //****************
    //构造函数
    //****************
    public function __construct(){
        //引入父类的构造函数
        parent::__construct();
        //登录判断
        if(CONTROLLER_NAME!="Login"){
            if(empty($_SESSION[AppName])){
                $data=array('url'=>'index.php?m=Admin&c=login&a=index',
                    'contant'=>'请登录后再操作！'
                );
                $this->tips($data);
                exit();
            }else{
               $this->refreshLogin();
            }
        }
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
     * 输出系统警告
     * @param array $data
     */
    public function warm($data) {
        $data['title'] = $data['title']? $data['title'] : '系统警告-信息提示';
        $data['contant'] = $data['contant'] ? $data['contant'] : '系统警告';
        $data['urlcancel'] = $data['urlcancel'] ? $data['urlcancel'] : 'index.php?m=Admin&c=index&a=welcome';
        $data['urlok'] = $data['urlok'] ? $data['urlok'] : 'index.php?m=Admin&c=index&a=welcome';
    
        $this->assign('title',$data['title']);
        $this->assign('contant',$data['contant']);
        $this->assign('urlcancel',$data['urlcancel']);
        $this->assign('urlok',$data['urlok']);
        $this->display('admin/warm');
        exit();
    }
    
    private function refreshLogin(){
        $IP=new IPModel();
        $uinfo=session(AppName);
        $uid=intval($uinfo['id']);
        $lasttime=intval($uinfo['lasttime']);
        $where=array('uid'=>$uid);
        $login=$IP->where($where)->find();
        $diff=time()-$lasttime;
        if($diff >= 600||$login['session_id']!=session_id()){
            unset($_SESSION[AppName]);
            $tip=array('url'=>'index.php?m=Admin&c=login&a=index',
                'contant'=>"已退出系统，请检测最近登录日记！"
            );
            $this->tips($tip);
            exit();
        }else{
            if($diff>=500){
                $data=array(
                    'lastTime'=>time()
                );
                $IP->where($where)->save($data);
            }
        }
        $_SESSION[AppName]['lasttime']=time();
    }
    
    public function  _empty(){
    
    }
}