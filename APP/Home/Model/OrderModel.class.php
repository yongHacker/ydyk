<?php
namespace Home\Model;
use Think\Model;

class OrderModel extends Model{
    
    public function addData($order,$info){
        $this->startTrans();
        $flag=false;
        $res='1';
        $id=$this->add($order);
        if($id){
            $m=new Model('orderinfo');
            $i=false;
            foreach ($info as $item){
                $item['orid']=$id;
                $i=$m->add($item);
            }
            if($i){
                $flag=true;
            }
        }
        if($flag){
            $_SESSION['orid']=$id;
            $this->commit();
        }else {
            $this->rollback();
            $res= '-1';
        }
        return $res;
    }
}