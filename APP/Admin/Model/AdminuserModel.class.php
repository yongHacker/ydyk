<?php
namespace Admin\Model;
use Think\Model;
use Admin\Model\IPModel;
class AdminuserModel extends Model{
    
    public function addUser($data){
    
        $this->startTrans();
        $flag=false;
        $res=0;
        $m=new Model('auth_group_access');
        $where=array('uname'=>$data['uname']);
        $f=$this->where($where)->find();
        if($f){
            $res= '0';
        }else{
            $this->create($data);
            $f=$this->add();
            if($f){
                $d=array('uid'=>$f,'group_id'=>$data['auth_group']);
                $flag=$m->add($d);
                $res= '1';
            }
        }
        if($flag){
            $this->commit();
        }else {
            $this->rollback();
            $res= '-1';
        }
        return $res;
    }
    
    public function login($data){
        $where=array('uname'=>$data['uname']);
        $info=$this->where($where)->find();
        if(empty($info)){
            return '-1';
        }else{
            if($info['pwd']==md5($data['pwd'].$info['salt'])){
                $admin=array(
                    "id"         =>$info["uid"],
                    "name"       =>$info["uname"],
                    "lasttime"   =>time(),
                );
                $flag=$this->islogin($info['uid']);
                if($flag=='0'){
                    unset($_SESSION[AppName]);
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
    
    public function islogin($uid){
        $IP=new IPModel();
        $where=array('uid'=>$uid);
        $info=$IP->where($where)->find();
        if(empty($info)||$info['state']=='0'){
            return '0';
        }else if($info['state']=='1'){
            $diff=time()-intval($info['lasttime']);
            if($diff >= 600){
                return '0';
            }else{
                //echo session_id();
                if(session_id()==$info['session_id']){
                    return '0';
                }else{
                    return '1';
                }
            }
        }else{
            return '-1';
        }
    }
    
    public function del($uid){

        $this->startTrans();
        $flag=false;
        $ip=new IPModel();
        $where=array('uid'=>$uid);
        $ip->where($where)->delete();
        
        $m=new Model('auth_group_access');
        $m->where($where)->delete();
        
        $flag=$this->where($where)->delete();
        if($flag){
            $this->commit();
        }else {
            $this->rollback();
        }
        return $flag;
    }
}
?>