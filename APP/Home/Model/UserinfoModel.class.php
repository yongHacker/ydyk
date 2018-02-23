<?php
namespace Home\Model;
use Think\Model;

class UserinfoModel extends Model{
    /**添加操作
     * @param $data
     * @return mixed
     */
    public function add_array($data){
        return $this->add($data);
    }

    public function selectAll(){
        $where['uid']=$_SESSION['uid'];
        return $this->where($where)->select();
    }

}