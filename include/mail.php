<?php use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function registermail($emel,$kumpulan,$nama){
    include 'template.php';
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'mail.adbroslan.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'ppmselangor@adbroslan.com';                 // SMTP username
        $mail->Password = 'phi1dkV;9GGw';                           // SMTP password
        $mail->SMTPSecure = '';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 26;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('ppmselangor@adbroslan.com', 'SPKS@Admin');
        $mail->addAddress($emel, $nama);     // Add a recipient
        $mail->addReplyTo('admin@spks.ml', 'Admin');
        
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = '[SPKS] Tahniah! Permohonan anda untuk menyertai '.$kumpulan.' telah berjaya!';
        $mail->Body    = $bodycontent;
        $mail->AltBody = '';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

}
?>