<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model{

    /**会员登录
     * @param $data
     * @return mixed
     */
    public function login($data){
        $map['uname']=$data['uname'];
        $row = $this->where($map)->find();
        if(!$row) {
            return 0;//未注册用户名
        }
        $salt = $row['salt'];
        $pwd = md5($data['pwd'].$salt);
        if($pwd == $row['pwd']){
            $uid = $row['uid'];
            $this->execute("update `my_user` set state='1' where uid='$uid'");
            return 1;//登录成功
        }else{
            return 2;//密码错误
        }
    }

    /**会员注册
     * @param $data
     * @return int
     */
    public function register($data){
        $map['uname']=$data['uname'];
        if($this->where($map)->find()){
            return 0;//用户名已存在
        }else{
            $data['phone']=$data['uname'];
            $data['addtime']=time();
            $data['salt']=mt_rand(10000,99999);
            $data['pwd']=md5($data['pwd'].$data['salt']);
            $f=$this->add($data);
            if(!$f){
                return 1;//添加失败
            }
            return $f;//添加成功
        }
    }

    /**
     * 会员修改密码
     */
    public function editPwd($data){
        $where = array('uname'=>$_SESSION['uname']);
        $row = $this->where($where)->field('salt,pwd')->find();
        $srcpwd = md5($data['pwd'].$row['salt']);
        if ($srcpwd==$row['pwd']){
            if($data['newpwd']==$data['newpwdConfirm']){
                $newsalt = mt_rand(10000,99999);
                $arr = array(
                    'salt'=>$newsalt,
                    'pwd'=>md5($data['newpwd'].$newsalt)
                );
                $result = $this->where($where)->save($arr);
                if (!$result){
                    $mes='系统异常,修改密码失败';
                }else{
                    $mes='修改密码成功';
                }

            }else{
                $mes = '两次密码填写不一致';
            }
        }else{
            $mes = '请正确填写原密码';
        }

        return $mes;
}

    /**会员个人信息查询
     * @return mixed
     */
    public function selectInfo(){
        $where['uid']=$_SESSION['uid'];
        return $this->where($where)->find();
    }

    /**会员修改个人信息
     * @param $data
     * @return bool
     */
    public function editInfo($data){

        $arr=array(
            'nickname'=>$data['nickname'],
            'phone'=>$data['uphone'],
            'email'=>$data['email'],
            'birthday'=>strtotime($data['user_date']),
            'wechat'=>$data['wechat'],
            'sex'=>$data['sex'],
        );
        $where['uid'] = $_SESSION['uid'];
        return $this->where($where)->save($arr);
    }

}