<?php
namespace Admin\Controller;

use Admin\Controller\PublicController;
use Think\Model;
use Admin\Model\GoodsModel;
class GoodsController extends PublicController{
  
    //****************
    //构造函数
    //****************
    private $upload;
    public function __construct(){
        //引入父类的构造函数
        parent::__construct();
        $this->upload=new UploadController();
        
    }
    
    public function goodsList(){
        $state=intval($_GET['state']);
        $m=new Model();
        if($state>=1&&$state<=4){
            $s=$state-1;
            $where='state='.$s;
            $count=$m->table('my_goods')->where($where)->count();
        }else{
            $count=$m->table('my_goods')->count();
        }
        
        //分页
        $pageSize=8;  //每页显示条数
        $pageurl = 'index.php?m=admin&c=goods&a=goodsList&state='.$state.'&page=';
        $pageData=array('rowCount'=>$count,'pageSize'=>$pageSize,
            'pageurl'=>$pageurl);
        $startNum=$this->pagination($pageData);
        
        $field="a.*,b.cname1";
        $where="a.cid=b.cid";
        if($state>=1&&$state<=4){
            $s=$state-1;
            $where=$where.' and a.state='.$s;
        }
        $list=$m->table('my_goods a,my_classify b')
                ->where($where)->field($field)
                ->limit($startNum,$pageSize)->select();
        $this->assign('state',$state+1);
        $this->assign('count',$count);
        $this->assign('list',$list);
        $this->display('admin/goodsList');
    }
    
    public function addGoods() {
        
        $m=new Model();
        $field="normid,norname";
        $norms=$m->table('my_norms')->field($field)->select();
        $field="cid,cname1,level";
        $classify=$m->table('my_classify')->field($field)->select();
        $this->assign('norms',$norms);
        $this->assign('classify',$classify);
        $this->assign('info','');
        $this->assign('url','index.php?m=admin&c=goods&a=addDeal');
        $this->display('admin/updateGoods');
    }
    
    public function update(){
        $id=intval($_GET['id']);
        if(empty($id)){
            exit();
        }
        $m=new Model();
        
        $field="normid,norname";
        $norms=$m->table('my_norms')->field($field)->select();
        
        $where=array('gid'=>$id);
        $info=$m->table('my_goods')->where($where)->find();
        $normids=explode(',',$info['normids']);
        foreach ($norms as &$item){
            if(in_array($item['normid'], $normids)){
                $item['isCheck']='checked';
            }else{
                $item['isCheck']='';
            }
        }
        
        $field="cid,cname1,level";
        $classify=$m->table('my_classify')->field($field)->select();
        
        $this->assign('norms',$norms);
        $this->assign('classify',$classify);
        $this->assign('info',$info);
        $this->assign('url','index.php?m=admin&c=goods&a=updateDeal');
        $this->display('admin/updateGoods');
    }
    
    public function updateDeal(){
        $id=intval($_POST['id']);
        if(empty($id)){
            exit();
        }
        $m=new GoodsModel();
        $data=$m->create();
        $where=array('gid'=>$id);
        $norms=$_POST['normid'];
        $data['normids']=implode(',',$norms);
        $tips=array('url'=>'index.php?m=Admin&c=goods&a=goodsList',
            'contant'=>'系统异常，修改失败！'
        );
        if(empty($_FILES['photo']['name'])){
            $f=$m->where($where)->save($data);
        }else{
            $imgs=$this->upload->uploadImg($_FILES['photo'],'images');
            if($imgs['num']!='1'){
                $tips['contant']=$imgs['message'];
            }else{
                $data['photo']=$imgs['url'];
                $f=$m->where($where)->save($data);
            }
        }
        if($f){
            $tips['contant']='修改成功，正在跳转到列表页面！';
        }
        $this->tips($tips);
    }
    
    public function addDeal(){
        $m=new GoodsModel();
        $data=$m->create();
        $norms=$_POST['normid'];
        $data['normids']=implode(',',$norms);
        $photo=$this->upload->uploadImg($_FILES['photo'], 'images');
        $d=array('url'=>'index.php?m=Admin&c=goods&a=addGoods',
            'contant'=>"系统异常，添加失败。"
        );
        if($photo['num']=='1'){
            $data=$data+array('addtime'=>time(),'photo'=>$photo['url']);
            $f=$m->add($data);
            if($f){
                $d['url']='index.php?m=Admin&c=goods&a=goodsList';
                $d['contant']="添加成功。";
            }
        }else{
            $d['contant']=$photo['message'];
        }
        $this->tips($d);
    }
    
    public function upload(){
        $photo=$this->upload->uploadImg($_FILES['photo'], 'images');
        $d=array('errno'=>'1',
            'url'=>"系统异常，添加失败。"
        );
        if($photo['num']=='1'){
           $d['errno']='0';
           $d['url']=upload_url.$photo['url'];
        }else{
            $d['url']=$photo['message'];
        }
        $this->ajaxReturn($d);
    }
    
    public function changeState(){
        $id=intval($_POST['id']);
        $state=intval($_POST['state']);
        
        $data=array(
            'num'=>0,
            'state'=>'',
            'msg'=>'修改失败'
        );
        switch ($state){
            case '0':$data['state']='待审核';break;
            case '1':$data['state']='审核通过';break;
            case '2':$data['state']='下架商品';break;
            case '3':$data['state']='审核失败';break;
        }
        if($state >=0&&$state<=3&&$id){
            $m=new GoodsModel();
            $where=array('gid'=>$id);
            $d=array('state'=>$state);
            $f=$m->where($where)->save($d);
            if($f){
                $data['num']=1;
                $data['msg']='修改成功';
            }
        }
        $this->ajaxReturn($data);
    }
    
    public function search(){
        $w=$_POST['where'];
        $c=trim($_POST['contant']);
        if($w=='id'){
            $where='gid='.$c;
        }else{
            $where="gname like '%".$c."%'";
        }
        $m=new GoodsModel();
        $count=$m->where($where)->count();
        if($count){
            $state=0;
            
            $field="a.*,b.cname1";
            $where="a.cid=b.cid and ".$where;
            $list=$m->table('my_goods a,my_classify b')
                    ->where($where)->field($field)->select();
            $this->assign('state',$state+1);
            $this->assign('c',$c);
            $this->assign('count',$count);
            $this->assign('list',$list);
            $this->display('admin/goodsList');
        }else{
            $tip=array('url'=>'index.php?m=admin&c=goods&a=goodsList&state=0',
                'contant'=>'搜索结果为空，正在跳转到列表页面！'
            );
            $this->tips($tip);
        }
    }
}
?>