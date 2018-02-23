<?php
namespace Admin\Controller;
use Think\Controller;
class EmailController extends Controller{
    
    public function sendEmail(){
        Vendor('PHPMailer.PHPMailerAutoload');     
        $mail = new \PHPMailer(); //实例化
        $mail->IsSMTP(); // 启用SMTP
        $mail->Host='smtp.exmail.qq.com'; //smtp服务器的名称（这里以QQ邮箱为例）
        $mail->SMTPAuth = TRUE; //启用smtp认证
        $mail->Username = '1906233163@qq.com'; //你的邮箱名
        $mail->Password = '' ; //邮箱密码
        $mail->From = '1395585523@qq.com'; //发件人地址（也就是你的邮箱地址）
        $mail->FromName = 'jiang'; //发件人姓名
        $mail->AddAddress('1395585523@qq.com',"jiang");
        $mail->WordWrap = 50; //设置每行字符长度
        $mail->IsHTML(TRUE); // 是否HTML格式邮件
        $mail->CharSet='utf-8'; //设置邮件编码
        $mail->AltBody = "这是一个纯文本的HTML电子邮件客户端"; //邮件正文不支持HTML的备用显示
        // 该邮件的主题
        $mail->Subject = '哈哈';
        // 该邮件的正文内容
        $mail->Body = 'jiangjiang';
        // 使用 send() 方法发送邮件
        if(!$mail->Send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo "\nMessage has been sent";
        }
    }
}
?>