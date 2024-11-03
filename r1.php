<?php
// Include the file where your database connection is established
include_once("dbconnection.php");

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;
            
            require('PHPMailer\PHPMailer.php');
            require('PHPMailer\SMTP.php');
            require('PHPMailer\Exception.php');


        $fn = $_POST['fn'];
        $em = $_POST['email'];
        $pwd = $_POST['pswd'];
        $gen = $_POST['gen'];
        $mobile = $_POST['mobile'];
        $pic = $_FILES['pic'];

        $otp=rand(0000,9999);
       

        echo $fn.$em.$pwd.$gen.$mobile.$pic['name'],$otp;

        $uploadDirecotry="uploads/";

        move_uploaded_file($pic['tmp_name'],$uploadDirecotry.$pic['name']);
        
        // Instantiate new PHP

            

            $mail = new PHPMailer();
            try {
                // Server settings
                $mail->isSMTP(); // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
                $mail->SMTPAuth = true; // Enable SMTP authentication
                $mail->Username ='athakur774@rku.ac.in'; // SMTP username//sender mail id
                $mail->Password = 'focus@123'; // SMTP password // sender mail id password
                $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, ssl also accepted
                $mail->Port = 465; // TCP port to connect to
                // $mail->SMTPDebug = 2;
            
                // Recipients
                $mail->setFrom('athakur774@rku.ac.in', 'shopEasy'); // Sender's email address and name
                $mail->addAddress('anupthakurff@gmail.com', "anup"); // Recipient's email address and name
            
                // Attachments
                //$mail->addAttachment('/path/to/attachment/file.pdf', 'Attachment.pdf'); // Path to the attachment and optional filename
            



                // Content
                $mail->isHTML(true); // Set email format to HTML
                $mail->Subject = 'Otp autentication';
                $mail->Body = 'Your mail verification code Is ' . $otp;



                // Send the email
                $mail->send();
            } catch (Exception $e) {
                echo "Email sending failed. Error: {$mail->ErrorInfo}";
            }
       
     ?>   
        
    
    
