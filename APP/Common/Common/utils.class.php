<?php
namespace Common\Common;
class utils{
    /**
     * 简单对称加密算法之加密
     * @param String $string 需要加密的字串
     * @param String $skey 加密EKY
     * @author Anyon Zou 
     * @date 2013-08-13 19:30
     * @update 2014-10-10 10:10
     * @return String
     */
    function encode($string = '', $skey = 'cxphp') {
        $strArr = str_split(base64_encode($string));
        $strCount = count($strArr);
        foreach (str_split($skey) as $key => $value)
            $key < $strCount && $strArr[$key].=$value;
        return str_replace(array('=', '+', '/'), array('O0O0O', 'o000o', 'oo00o'), join('', $strArr));
    }
    
    /**
     * 简单对称加密算法之解密
     * @param String $string 需要解密的字串
     * @param String $skey 解密KEY
     * @author Anyon Zou 
     * @date 2013-08-13 19:30
     * @update 2014-10-10 10:10
     * @return String
     */
    function decode($string = '', $skey = 'cxphp') {
        $strArr = str_split(str_replace(array('O0O0O', 'o000o', 'oo00o'), array('=', '+', '/'), $string), 2);
        $strCount = count($strArr);
        foreach (str_split($skey) as $key => $value)
            $key <= $strCount  && isset($strArr[$key]) && $strArr[$key][1] === $value && $strArr[$key] = $strArr[$key][0];
        return base64_decode(join('', $strArr));
    }
    
    /**
     * 获取用户IP
     */
    function getIP(){
        $realip = '';  
        $unknown = 'unknown';  
        if (isset($_SERVER)){  
            if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) && strcasecmp($_SERVER['HTTP_X_FORWARDED_FOR'], $unknown)){  
                $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);  
                foreach($arr as $ip){  
                    $ip = trim($ip);  
                    if ($ip != 'unknown'){  
                        $realip = $ip;  
                        break;  
                    }  
                }  
            }else if(isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP']) && strcasecmp($_SERVER['HTTP_CLIENT_IP'], $unknown)){  
                $realip = $_SERVER['HTTP_CLIENT_IP'];  
            }else if(isset($_SERVER['REMOTE_ADDR']) && !empty($_SERVER['REMOTE_ADDR']) && strcasecmp($_SERVER['REMOTE_ADDR'], $unknown)){  
                $realip = $_SERVER['REMOTE_ADDR'];  
            }else{  
                $realip = $unknown;  
            }  
        }else{  
            if(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), $unknown)){  
                $realip = getenv("HTTP_X_FORWARDED_FOR");  
            }else if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), $unknown)){  
                $realip = getenv("HTTP_CLIENT_IP");  
            }else if(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), $unknown)){  
                $realip = getenv("REMOTE_ADDR");  
            }else{  
                $realip = $unknown;  
            }  
        }  
        $realip = preg_match("/[\d\.]{7,15}/", $realip, $matches) ? $matches[0] : $unknown;  
        return $realip;  
    }
    /**
     * 获取ip所在位置信息
     * @param string $ip
     * @return json ip详细信息
     */
    function getIPCity($ip){
        if($ip){
            $res = @file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' . $ip);
            if(empty($res)){ return false; }
            $jsonMatches = array();
            preg_match('#\{.+?\}#', $res, $jsonMatches);
            if(!isset($jsonMatches[0])){ return false; }
            $json = json_decode($jsonMatches[0], true);
            if(isset($json['ret']) && $json['ret'] == 1){
                $json['ip'] = $ip;
                unset($json['ret']);
            }else{
                return false;
            }
            return $json;
        }else{
            return false;
        }
        
    }
    /**
     * 生成验证码
     */
    function checkImg(){
        ob_clean();
        $str = rand(10000,99999);
        
        $width  = 70;
        
        $height = 37;
        
        @ header("Content-Type:image/png");
        
        $im = imagecreate($width, $height);
        
        $back = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);
        
        $pix  = imagecolorallocate($im, 187, 230, 247);
        
        $font = imagecolorallocate($im, 41, 163, 238);
        
        mt_srand();
        for ($i = 0; $i < 1000; $i++) {
            /*
             imagesetpixel ( resource $image , int $x , int $y , int $color )
             */
            imagesetpixel($im, mt_rand(0, $width), mt_rand(0, $height), $pix);
        }
        
        /*imagestring ( resource $image , int $font , int $x , int $y , string $s , int $col )
         */
        imagestring($im, 5, 15, 10, $str, $font);
        
        
        imagerectangle($im, 0, 0, $width -1, $height -1, $font);
        
        imagepng($im);
        
        imagedestroy($im);
        
        $_SESSION["imgCheck"] = strtolower($str);
    }
}
?>