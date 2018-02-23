<?php
namespace Common\Common;

use Think\Exception;
class Exception extends Exception{
    
    public function mysql($error){
        print_r($error);
    }
}