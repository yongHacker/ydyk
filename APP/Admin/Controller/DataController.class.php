<?php
namespace Admin\Controller;
use Admin\Controller\PublicController;
use Think\Model;
class DataController extends PublicController{
    
    private $ds = "\n\r\n\r";
    // 每条sql语句的结尾符
    public $sqlEnd = ";";
    
    private $mysql;
    //****************
    //构造函数
    //****************
    public function __construct(){
        //引入父类的构造函数
        parent::__construct();
        $this->mysql=new Model();
        
    }
    
    public function dataBackups() {
        $tabs = $this->mysql->query('SHOW TABLE STATUS');
        $list=$this->getDataFileList();
        $total = 0;
        foreach ($tabs as &$item) {
            if($this->isExist($item['name'], $list)){
                $item['state']='已备份';
            }else{
                $item['state']='没有备份';
            }
            $item['size'] =$this->byteFormat($item['data_length'] + $item['index_length']);
            $total+=$item['data_length'] + $item['index_length'];
        }
        //print_r($tabs);
        $this->assign("list", $tabs);
        $this->assign("total", $this->byteFormat($total));
        $this->assign("tables", count($tabs));
        $this->display('admin/dataBackups');
    }
    
    public function dataBackupsTable(){
        $tablename=$_POST['table'];
        if($tablename=='all'){
           $result=$this->export('');
        }else{
           $result=$this->export($tablename);
        }
        echo json_encode($result);
    }
    
    /**
     * 数据库还原处理
     */
    public function dataResumeTable(){
        $tablename=$_POST['table'];
        if($tablename){
            //$result=$this->restore($tablename.'.sql');
        }
        $result=array('num'=>1,'msg'=>'数据库导入成功');
        //$this->unlock();
        echo json_encode($result);
    }
    
    public function dataResume() {
        $table=$this->getTables();
        $list=$this->getDataFileList();
        foreach ($list as &$item){
            if(in_array($item['name'], $table)){
                $item['table']='1';
            }else{
                $item['table']='0';
            }
        }
        $this->assign('count',count($list));
        $this->assign('list',$list);
        $this->display('admin/dataResume');
    }
    
    private function getDataFileList(){
        $list=[];
        foreach (glob(DB_BACKUP."*.sql") as $filename) {
            $arr=array();
            $arr['filename']=$filename;
            $arr['name']=basename($filename,'.sql');
            $arr['time']=date('Y-m-d H:i:s',filemtime($filename));
            $arr["size"]=$this->byteFormat(filesize($filename));
            $list[]=$arr;
        }
        return $list;
    }
    
    /**
     * getTables 获取数据库表列表
     * @return array $tables      返回结果数组    
     */
    private function getTables() {
        $res = $this->mysql->query ( "SHOW TABLES;" );
        $tables = array ();
        foreach ( $res as $row ) {
            
            foreach ($row as $v){
                $tables[]=$v;
            }
        }
        return $tables;
    }
    
    /**
     * 插入数据库备份基础信息
     *
     * @return string
     */
    private function _base() {
        $value = '';
        $value .= '-- MySQL database dump' . $this->ds;
        $value .= '-- Created, Power By JAING. ' . $this->ds;
        $value .= '--' . $this->ds;
        $value .= '-- 主机: ' . $this->host . $this->ds;
        $value .= '-- 生成日期: ' . date ('Y-m-d H:i:s',time()). $this->ds;
        $value .= '-- MySQL版本: ' . mysql_get_server_info() . $this->ds;
        $value .= '-- PHP 版本: ' . phpversion () . $this->ds;
        $value .= $this->ds;
        $value .= '--' . $this->ds;
        $value .= '-- 数据库: `' . C("DB_NAME") . '`'. $this->ds;
        $value .= '--' . $this->ds ;
        $value .= '-- -------------------------------------------------------';
        $value .= $this->ds . $this->ds;
        return $value;
    }
    
    // 锁定数据库，以免备份或导入时出错
    private function lock($tablename, $op = "WRITE") {
        
        if ($this->mysql->execute( "lock tables " . $tablename." " . $op )){
            return true;
        }else{
            return false;
        }
    }
    // 解锁
    private function unlock() {
        
        if ($this->mysql->query ( "unlock tables" ))
            return true;
        else
            return false;
    }
    /**
     * 导入备份数据
     * 说明：分卷文件格式20120516211738_all_v1.sql
     * 参数：文件路径(必填)
     *
     * @param string $sqlfile
     */
    private function restore($file) {
        $sqlfile=DB_BACKUP.$file;
        $result=array('num'=>'1','msg'=>'');
        // 检测文件是否存在
        if (!file_exists($sqlfile)) {
            $result=array('num'=>'0','msg'=>'文件不存在！');
            return $result;
            exit ();
        }
        //$this->lock ( C("DB_NAME") );
        // 获取数据库存储位置
        $sqlpath = pathinfo ( $sqlfile );
        //    $this->sqldir = $sqlpath ['dirname'];
        // 检测是否包含分卷，将类似20120516211738_all_v1.sql从_v分开,有则说明有分卷
        $volume = explode ( "_v", $sqlfile );
        $volume_path = $volume [0];
        $result['msg'] .= "正在导入备份数据，请稍等！<br />";
        if (empty ( $volume [1] )) {
            $result['msg'] .= "正在导入sql：" . $sqlfile . '<br />';
            // 没有分卷
            $res=$this->_import ( $sqlfile );
            if ($res['num']=='1') {
                $result['msg'].= "数据库导入成功！";
                //$this->success("数据库导入成功！");
            } else {
                $result=array('num'=>'0','msg'=>$res['msg']);
                return $result;
                exit ();
            }
        } else {
            // 存在分卷，则获取当前是第几分卷，循环执行余下分卷
            $volume_id = explode ( ".sq", $volume [1] );
            // 当前分卷为$volume_id
            $volume_id = intval ( $volume_id [0] );
            while ( $volume_id ) {
                $tmpfile = $volume_path . "_v" . $volume_id . ".sql";
                // 存在其他分卷，继续执行
                if (file_exists ( $tmpfile )) {
                    // 执行导入方法
                    $result['msg'].= "正在导入分卷 $volume_id" . $tmpfile . '<br />';
                    if ($this->_import ( $tmpfile )) {
                    } else {
                        $volume_id = $volume_id ? $volume_id :1;
                        $result['num']=0;
                        $result['msg'].="导入分卷：" . $tmpfile . '失败！可能是数据库结构已损坏！请尝试从分卷1开始导入';
                        return $result;
                        exit ();
                    }
                } else {
                    $result['msg'] .= "此分卷备份全部导入成功！<br />";
                }
                $volume_id ++;
            }
        }
        return $result;
    }
    /**
     * 插入语句构造
     *
     * @param string $table
     * @return string
     */
    private function _insert_record($table) {
        // sql字段逗号分割
        $res = $this->mysql->query ( 'select * FROM `' . $table . '`' );
        // 循环每个子段下面的内容
        foreach ($res as $val){
            $comma = 0;
            $insert .= "INSERT INTO `" . $table . "` VALUES(";
            foreach ($val as $v){
                $insert.=$comma == 0 ? "" : ",";
                $insert.= ( "'" . mysql_escape_string ( $v ) . "'");
                $comma++;
            }
            $insert .= ");" . $this->ds;
    
        }
    
        return $insert;
    }
    /**
     * 插入表结构
     *
     * @param unknown_type $table
     * @return string
     */
    private function _insert_table_structure($table) {
        $sql = '';
        $sql .= "--" . $this->ds;
        $sql .= "-- 表的结构" . $table .$this->ds."--" .$this->ds;
        // 如果存在则删除表
        $sql .= "DROP TABLE IF EXISTS `" . $table . '`' . $this->sqlEnd . $this->ds;
        // 获取详细表信息
        $res = $this->mysql->query ( 'SHOW CREATE TABLE `' . $table . '`' );
        $sql .= $res [0]["create table"];
        $sql .= $this->sqlEnd . $this->ds;
        // 加上
        $sql .= $this->ds;
        $sql .= "--" . $this->ds;
        $sql .= "-- 转存表中的数据 " . $table . $this->ds;
        $sql .= "--" . $this->ds;
        $sql .= $this->ds;
        return $sql;
    }
    /**
     * 数据库备份
     * 参数：备份哪个表(可选),备份目录(可选，默认为backup),分卷大小(可选,默认2048，即2M)
     *
     * @param string $dir
     * @param int $size
     * @param array $tablename
     */
    private function export($tablename='') {
        $dir = DB_BACKUP;
        // 创建目录
        if (! is_dir ( $dir )) {
            mkdir ( $dir, 0777, true ) or die ( '创建文件夹失败' );
        }
        $result=array('num'=>'1','msg'=>'');
        $size = 20480;//20M
        $sql = '';
        //$tables=explode(",", $tablename);
        $value= $tablename;
        //print_r($tables);
        if(!empty($tablename)){
            //foreach ($tables as $value) {
                $result['msg'] = '正在备份表' . $value . '<br />';
                // 插入文件头信息
                $sql = $this->_base ();
                // 插入表结构信息
                $sql .= $this->_insert_table_structure ( $value );
                // 文件名前缀
                //$filename = date ( 'YmdHis' ) . "_" . $value;
                $filename = $value;
                // 分卷标识
                $p = 1;
                $sql .= $this->_insert_record ( $value);
                // 如果大于分卷大小，则写入文件
                //$msg.="文件大小为：".strlen ( $sql );
                /* 暂停使用分卷备份数据库
                if (strlen ( $sql ) >= $size * 1024) {
                    $file = $filename . "_v" . $p . ".sql";
                    $res=$this->_write_file ( $sql, $file, $dir );
                    if ($res['num']=='1') {
                        $result['msg'] .= "表-" . $value . "-卷-数据备份完成" . $p . '<br />';
                        //$msg.= "-数据备份完成,生成备份文件 <span style='color:#f00;'>$dir.$filename</span><br />";
                    } else {
                        $result['msg'] .= "备份表-" . $value . "-失败<br />";
                        $result['num']='0';
                        $result['msg'] .=$res['msg'];
                        return $result;
                        //return false;
                    }
                    // 下一个分卷
                    $p ++;
                    // 重置$sql变量为空，重新计算该变量大小
                    $sql = "";
                }else{
                */
                    // sql大小不够分卷大小
                    if ($sql != "") {
                        $filename .=  ".sql";
                        $res=$this->_write_file ( $sql, $filename, $dir );
                        if ($res['num']=='1') {
                            $result['msg'] .= "表-" . $value . "-卷-" . $p. '<br />'. "-数据备份完成";
                        } else {
                            $result['msg'] .= "备份卷-" . $p . "-失败<br />";
                            $result['msg'] .=$res['msg'];
                            $result['num']='0';
                            return $result;
                        }
                    }
                //}
            //}
        }else{
            // 备份全部表
            $tables = $this->mysql->query( "show table status from " . C("DB_NAME"));
            if ($tables) {
                $result['msg'] .= "读取数据库结构成功！<br />";
            } else {
                $result['msg'] .= "读取数据库结构失败！<br />";
                $result['num']='0';
                $result['msg'] .=$res['msg'];
                return $result;
                exit ( "读取数据库结构失败！<br />" );
            }
            // 插入dump信息
            $sql .= $this->_base ();
            // 文件名前面部分
            $filename ="all";
            // 查出所有表
            $tables = $this->mysql->query ( 'SHOW TABLES' );
            // 第几分卷
            $p = 1;
            // 循环所有表
            foreach  ( $tables as $value) {
                foreach ($value as $v) {
    
                    // 获取表结构
                    $sql .= $this->_insert_table_structure ( $v );
                    // 单条记录
                    $sql .= $this->_insert_record ( $v );
                }
            }
            // 如果大于分卷大小，则写入文件
            if (strlen ( $sql ) >= $size * 1024) {
                $file = $filename . "_v" . $p . ".sql";
                // 写入文件
                $res=$this->_write_file ( $sql, $file, $dir );
                if ($res['num']=='1') {
                    $result['msg'] .= "-卷-" . $p . "-数据备份完成";
                } else {
                    $result['msg'] .= "备份卷-" . $p . "-失败<br />";
                    $result['msg'] .=$res['msg'];
                    $result['num']='0';
                    return $result;
                }
                // 下一个分卷
                $p ++;
                // 重置$sql变量为空，重新计算该变量大小
                //$sql = "";
            }
            // sql大小不够分卷大小
            if ($sql != "") {
                $filename .=  ".sql";
                $res=$this->_write_file ( $sql, $filename, $dir );
                if ($res['num']=='1') {
                    $result['msg'] .= "数据库-" . C("DB_NAME") . "-卷-" . $p. '<br />'. "-数据备份完成";
                } else {
                    $result['msg'] .= "备份卷-" . $p . "-失败<br />";
                    $result['msg'] .=$res['msg'];
                    $result['num']='0';
                    return $result;
                }
            }
        }
        return $result;
    }
    
    /**
     * 写入文件
     *
     * @param string $sql
     * @param string $filename
     * @param string $dir
     * @return array
     */
    private function _write_file($sql, $filename, $dir) {
        $dir = DB_BACKUP;
        $res=array('num'=>'1','msg'=>'写入文件成功');
        // 创建目录
        if (! is_dir ( $dir )) {
            mkdir ( $dir, 0777, true );
        }
        $re = true;
        if (! @$fp = fopen ( $dir . $filename, "w+" )) {
            $res['num'] = '0';
            $res['msg'] = "打开文件失败！";
        }
        if (! @fwrite ( $fp, $sql )) {
            $res['num'] = '0';
            $res['msg'] = "写入文件失败，请文件是否可写";
        }
        if (! @fclose ( $fp )) {
            $res['num'] = '0';
            $res['msg'] = "关闭文件失败！";
        }
        return $res;
    }
    /**
     * 将sql导入到数据库（普通导入）
     *
     * @param string $sqlfile
     * @return boolean
     */
    private function _import($sqlfile) {
        $res=array('num'=>'1','msg'=>'成功');
        // sql文件包含的sql语句数组
        $sqls = array ();
        $f = fopen ( $sqlfile, "rb" );
        // 创建表缓冲变量
        $create_table = '';
        while ( ! feof ( $f ) ) {
            // 读取每一行sql
            $line = fgets ( $f );
            // 这一步为了将创建表合成完整的sql语句
            // 如果结尾没有包含';'(即为一个完整的sql语句，这里是插入语句)，并且不包含'ENGINE='(即创建表的最后一句)
            if (! preg_match ( '/;/', $line ) || preg_match ( '/ENGINE=/', $line )) {
                // 将本次sql语句与创建表sql连接存起来
                $create_table .= $line;
                // 如果包含了创建表的最后一句
                if (preg_match ( '/ENGINE=/', $create_table)) {
                    //执行sql语句创建表
                    $r=$this->_insert_into($create_table);
                    if($r['num']=='0'){
                        $res['num']='0';
                        $res['msg']=$r['msg'];
                        break;
                    }
                    // 清空当前，准备下一个表的创建
                    $create_table = '';
                }
                // 跳过本次
                continue;
            }
            //执行sql语句
            $r=$this->_insert_into($line);
            if($r['num']=='0'){
                $res['num']='0';
                $res['msg']=$r['msg'];
                break;
            }
        }
        fclose ( $f );
        return $res;
    }
    //插入单条sql语句
    private function _insert_into($sql){
        
        $res=array('num'=>'1','msg'=>'成功');
        if (!$this->mysql->execute(trim($sql))) {
            $res['msg'] = $sql.'执行失败<br/>';
            $res['num'] = '0';
        }
        return $res;
    }
    /**
     +----------------------------------------------------------
     * 功能：计算文件大小
     +----------------------------------------------------------
     * @param int $bytes
     +----------------------------------------------------------
     * return string 转换后的字符串
     +----------------------------------------------------------
     */
    private function byteFormat($bytes) {
        $sizetext = array(" B", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
        return round($bytes / pow(1024, ($i = floor(log($bytes, 1024)))), 2) . $sizetext[$i];
    }
    
    /**
     * 判断元素是否在二维数组里
     * @param string $url
     * @param array $result
     * @return boolean
     */
    private function isExist($url,$result){
        $exist = false;
        foreach($result as $value){
            if(in_array($url,$value)){
                $exist = true;
                break;
            }
        }
        return $exist;
    }
}