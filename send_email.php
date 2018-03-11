<?php 

    require_once 'constants.php';
    require_once 'PHPMailer-phpmailer-5.0.2/class.phpmailer.php';
    require_once 'PHPMailer-phpmailer-5.0.2/class.smtp.php';
    
    $response = array();

    if(!empty($_REQUEST['submit'])){

        $email_to = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)

        $name             =   $_POST['name'];        
        $subject          =   $_POST['subject'];    
        $mobile_no        =   $_POST['mobile_no'];    
        $message          =   $_POST['message'];        

    }else {
        $response['status'] = "error";
        $response['message'] = ERROR_MSG;

        echo json_encode($response);
        exit;
    }
    
    // Send E-mail to Admin
    $mail = new PHPMailer(true); 

    $subject  = "New Subscription"; // Subject for Admin E-mail

    $content ="New subscribed user information are as follows:<br><br>";
    $content .="Name : ".ucwords($name)."<br>";      
    $content .= "E-mail : ".$emailto."<br>";
    $content .= "Contact : ".$mobileno."<br>";
    $content .= "Messages : ".$message."<br><br>";
    $content .= "Thank You!<br>";
    
    try {      
      
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
        $mail->Username   = GUSER;                 // GMAIL username
        $mail->Password   = GPWD;                  // GMAIL password

        $mail->AddAddress(EMAIL_TO_ADMIN);         // whom you wanna to send an email
        
        $mail->SetFrom($emailto, ucwords($name)); 

        $mail->Subject = $subject;

        $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; 

        $mail->MsgHTML($content);            

        if(!$mail->Send()) {
            $response['status'] = "success";
            $response['message'] = SUCCESS_MSG;        
            
        }else {
            $response['status'] = "fail";
            $response['message'] = ERROR_MSG;                
        }

    } catch (phpmailerException $e) {
        $response['status'] = "fail";
        $response['message'] = $e->errorMessage();  
      
    } catch (Exception $e) {
        $response['status'] = "fail";
        $response['message'] = $e->errorMessage();  
    }

    echo json_encode($response);

    exit;