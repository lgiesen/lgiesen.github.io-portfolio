<?php
    if(!isset($POST['submit'])){
    echo "Error. Please submit the form"
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $message = $_POST['message'];
    /*
    if something is mandatory:
    if(empty($email) && empty($phonenumber)){
    echo "Either email or phone number are required.";
    exit; 
    }
    */
    $email_from = 'b.leogiesen@gmail.com'; //Sending email address
    $email_subject = "Website contactMe submission";
    $email_body = "Hey Leo, hier ist die Kontaktanfrage von deiner Website: \n Name: $name \n Email: $email \n Phone Number: $phonenumber \n The Message: \n $message";
    $to = 'b.leogiesen@gmail.com'; //Email address destination
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    //now you can send the mail:
    mail($to, $email_subject, $email_body, $headers);
    //done. Redirect to thank-you page TODO!!!!!!!!
    header('Location: '.$file:///C:/Users/leori/OneDrive/Desktop/Web/myWebsite/Home/HTML/index.html?phonenumber=1234#section-contact);
    //protection against spammers
    function IsInjected($str){
        $injections = array(
        '(\n+)',
        '(\r+)',
        '(\t+)',
        '(%0A+)',
        '(%0D+)',
        '(%08+)',
        '(%09+)'
        );
                
        $inject = join('|', $injections);
        $inject = "/$inject/i";
        
        if(preg_match($inject,$str)){
        return true;
        }else{
        return false;
        }
    }
    if(IsInjected($visitor_email)){
        echo "Bad email value!";
        exit;
    }
?>
