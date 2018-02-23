<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
use Admin\Model\UserinfoModel;

class UserinfoController extends Controller{
    /**
     * 添加地址页面
     */
    public function addAddress(){
        $this->assign('url','index.php?m=admin&c=userinfo&a=addDeal');
        $this->display('address/add_address');
    }
    /**
     * 编辑地址页面
     */
    public function update(){
        $infoid=intval($_GET['infoid']);
        if($infoid){
            $where=array('infoid'=>$infoid);
            $m=new UserinfoModel();
            $info=$m->where($where)->find();
            $this->assign('info',$info);
            $this->assign('url','index.php?m=admin&c=userinfo&a=updateDeal');
            $this->display('address/edit_address');
        }
    }

    /**
     * 地址列表
     */
    public function addressList() {
        $m=new UserinfoModel();
        $count=$m->count();
        //分页
        $pageSize=5;  //每页显示条数
        $pageurl = 'index.php?m=admin&c=userinfo&a=addressList&page=';
        $pageData=array('rowCount'=>$count,'pageSize'=>$pageSize,
            'pageurl'=>$pageurl);
        $startNum=$this->pagination($pageData);

        $where="a.uid=b.uid";
        $field="a.uname,b.*";
        $list=$m->table('my_user a,my_userinfo b')->field($field)
            ->where($where)->limit($startNum,$pageSize)->select();
        $u=M('user');
        $list = $u->join('my_userinfo ON my_user.uid = my_userinfo.uid')->field('my_user.uname,my_userinfo.*')->order('infoid desc')->limit($startNum,$pageSize)->select();

        $this->assign('count',$count);
        $this->assign('list',$list);
//        $this->assign('name',$arr);
        $this->display('address/addressList');
    }

    /**
     * 添加处理
     */
    public function addDeal(){
        $m=new UserinfoModel();
        $data=$m->create();
        $flag=$m->insert($data);
        if(!$flag){
            echo "<script>alert('添加失败！请重新添加');window.history.back()</script>";
        }
        $this->addressList();
    }

    /**
     * 修改处理
     */
    public function updateDeal(){
        $infoid=intval($_POST['infoid']);
        if(empty($infoid)){
            exit();
        }
        $m=new UserinfoModel();
        $data=$m->create();
        $where=array('infoid'=>$infoid);
        $flag=$m->where($where)->save($data);

       /* $auth=new Model('auth_group');
        $d=array('group_id'=>$_POST['auth_group']);
        $auth->where($where)->save($d);*/

        $tip=array('url'=>'index.php?m=Admin&c=userinfo&a=addressList',
            'contant'=>'系统异常，修改失败！'
        );
        if($flag){
            $tip['contant']='修改成功，正在跳转到管理员列表页面！';
        }
        $this->tips($tip);
    }
    /**
     * 删除处理
     */
    public function del(){
        $uid=intval($_GET['infoid']);
        $tip=array('url'=>'index.php?m=Admin&c=userinfo&a=addressList',
            'contant'=>'系统异常，删除失败！'
        );
        $m=new UserinfoModel();
        $f=$m->del($uid);
        if($f){
            $tip['contant']='删除成功！';
        }
        $this->tips($tip);
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
        $data['time'] = $data['time'] ? $data['time'] : 3;
        $data['url'] = $data['url'] ? $data['url'] : 'index.php?m=Admin&c=index&a=welcome';
        $this->assign('title',$data['title']);
        $this->assign('contant',$data['contant']);
        $this->assign('time',$data['time']);
        $this->assign('url',$data['url']);
        //$this->display('Admin/tips');
        $this->display('admin/tips');//确保能跨模块调用
        exit();
    }

}