<?php
namespace Admin\Model;
use Think\Model;
use Admin\Model\AdminuserModel;
class IPModel extends Model{
  
    protected $tableName ='ip';
    public function addIP($data){
        //$where=array('ip'=>$data['ip'],'uid'=>$data['uid'],'_logic'=>'and');
        $where=array('uid'=>$data['uid']);
        $info=$this->where($where)->find();
        if($info){
            $this->where($where)->save($data);
        }else{
            $this->add($data);
        }
        
    }
    
    public function getAdminIP($start=0,$size=0){
        //$m=new AdminuserModel();
        $table="my_ip a";
        $field="a.*,b.uname";
        $order="a.lastTime DESC";
        $join="my_adminuser b on a.uid=b.uid";
        if($start <= $size&&$start>=0&&$size>0){
            $list=$this->table($table)->join($join,'LEFT')->order($order)
                    ->limit($start,$size)->field($field)->select();
        }else{
            $list=$this->table($table)->join($join,'LEFT')->order($order)
                ->field($field)->select();
        }
        
        return $list;
    }
    
   
}
?>