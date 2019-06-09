<?php
namespace app\admin\controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// require 'vendor/autoload.php';
class Register 
{   
  //邮箱注册
    public function index()
    { 
      
    
    }

     /**
     * 调用发送邮件
     */
    public function testmailer(){
        $mail = new PHPMailer(true); 
       try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // 启用详细调试输出
    $mail->isSMTP();                                      // 将Mailer设置为使用SMTP
    $mail->CharSet = 'UTF-8';
    $mail->Host = 'smtp.163.com';  // 指定主服务器和备份SMTP服务器
    $mail->SMTPAuth = true;                               // 启用SMTP身份验证
    $mail->Username = '13286808328@163.com';                 // SMTP username
    $mail->Password = 'zjx86083272';                           // SMTP密码
    $mail->SMTPSecure = 'ssl';                            // 启用TLS加密，也接受'ssl'
    $mail->Port = 465;                                    // 要连接的TCP端口to

    //收件人
    $mail->setFrom('13286808328@163.com', '社会你张哥');//发件人名称
    $mail->addAddress('1490526108@qq.com', '张哥');     // 收件人名称
    $mail->addAddress('1490526108@qq.com');               // 名称是可选的
    $mail->addReplyTo('1490526108@qq.com', '感谢cctv');//添加回复
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // 添加附件
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // 可选名称

    //Content
    $mail->isHTML(true);                                  // 将电子邮件格式设置为HTML
    $mail->Subject = '我来了';//标题
    $mail->Body    = '测试邮件';//内容
    $mail->AltBody = '是的';

    $mail->send();
    echo 'Welcome';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
    }

   // public function uio(){
   //      $res = uio();
   //      echo $res;
   // }

 

    

   
}
