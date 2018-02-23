<?php
namespace Admin\Model;
use Think\Model;

class UserinfoModel extends Model{
    public function insert($data){
        $this->create($data);
        $res=$this->add();
        return $res;
    }

    /**收货地址登录
     * @param $data
     * @return string
     */
    public function login($data){
        $where=array('uname'=>$data['uname']);
        $info=$this->where($where)->find();//通过用户名查询指定一条记录
        if(empty($info)){
            return '-1';
        }else{
            if($info['pwd']==md5($data['pwd'].$info['salt'])){//验证密码
                $admin=array(
                    "id"         =>$info["uid"],
                    "name"       =>$info["uname"],
                    "lasttime"   =>time(),
                );
                $flag=$this->islogin($info['uid']);//检验是否之前已登录
                if($flag=='0'){//登录成功
                    unset($_SESSION[AppName]);//销毁指定session
                    $_SESSION[AppName]=$admin;
                    return '1';
                }else{
                    return '2';
                }

            }else {
                return '0';
            }
        }
    }

    /**收货地址是否已登录
     * @param $uid
     * @return string
     */
    public function islogin($uid){
        $IP=new IPModel();
        $where=array('uid'=>$uid);
        $info=$IP->where($where)->find();
        if(empty($info)||$info['state']=='0'){
            return '0';//未登录状态
        }else if($info['state']=='1'){
            $diff=time()-intval($info['lasttime']);
            if($diff >= 600){
                return '0';//登录超时，未登录状态
            }else{
                if(session_id()==$info['session_id']){
                    return '0';//当前session_id()与数据库中session_id相同
                }else{
                    return '1';//否则拒绝登录
                }
            }
        }else{
            return '-1';//错误
        }
    }

    /**收货地址删除
     * @param $uid
     * @return bool|mixed
     */
    public function del($uid){

        $where=array('infoid'=>$uid);
        $flag=$this->where($where)->delete();
        return $flag;
    }

}