<?php
namespace Admin\Controller;
use Admin\Model\SpecModel;
use Admin\Controller\PublicController;
use Admin\Controller\UploadController;
class SpecController extends PublicController{
    
    private $upload;
    public function __construct(){
        //引入父类的构造函数
        parent::__construct();
        $this->upload=new UploadController();
    }
    
    public function add(){
        
        $this->assign('info','');
        $this->assign('url','index.php?m=admin&c=spec&a=addDeal');
        $this->display('admin/updateGoodsSpec');
        
    }
    
    public function update(){
        $id=intval($_GET['id']);
        if(empty($id)){
            exit();
        }
        $where=array('normid'=>$id);
        $m=new SpecModel();
        $info=$m->where($where)->find();
        $this->assign('info',$info);
        $this->assign('url','index.php?m=admin&c=spec&a=updateDeal');
        $this->display('admin/updateGoodsSpec');
    
    }
    
    public function addDeal(){
        $m=new SpecModel();
        $data=$m->create();
        $f=false;
        $tip=array('url'=>'index.php?m=Admin&c=spec&a=specList',
            'contant'=>'系统异常，添加失败，正在跳转到规格列表页面！'
        );
        $photo=$this->upload->uploadImg($_FILES['photo'], 'images');
        if($photo['num']=='1'){
            $data=$data+array('addtime'=>time(),'photo'=>$photo['url']);
            $f=$m->add($data);
            if($f){
                $tip['contant']="添加成功。";
            }
        }else{
            $tip['contant']=$photo['message'];
        }
        $this->tips($tip);
    }
    
    public function updateDeal(){
        $normid=intval($_POST['normid']);
        if(empty($normid)){
            exit();
        }
        $m=new SpecModel();
        $data=$m->create();
        $where=array('normid'=>$normid);
        $tips=array('url'=>'index.php?m=Admin&c=spec&a=specList',
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
            $tips['contant']='修改成功，正在跳转到规格列表页面！';
        }
        $this->tips($tips);
    }
    
    public function search(){
        $w=$_POST['where'];
        $c=trim($_POST['contant']);
        if($w=='id'){
            $where=array('normid'=>$c);
        }else{
            $where="norname like '%".$c."%'";
        }
        $m=new SpecModel();
        $count=$m->where($where)->count();
        if($count){
            $list=$m->where($where)->select();
            $this->assign('url','index.php?m=admin&c=spec&a=search');
            $this->assign('count',$count);
            $this->assign('c',$c);
            $this->assign('list',$list);
            $this->display('admin/goodsSpec');
        }else{
            $tip=array('url'=>'index.php?m=Admin&c=spec&a=specList',
                'contant'=>'搜索结果为空，正在跳转到规格列表页面！'
            );
            $this->tips($tip);
        }
    }
    
    public function specList(){
        
        $m=new SpecModel();
        $count=$m->count();
        
        $list=$m->select();
        
        $this->assign('url','index.php?m=admin&c=spec&a=search');
        $this->assign('c','');
        $this->assign('count',$count);
        $this->assign('list',$list);
        $this->display('admin/goodsSpec');
    }
    
}
?>