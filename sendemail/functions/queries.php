<?php
if(isset($_POST['sendEmail'])){
    $error = "";
    if(!empty($_POST['names'])){
        $names = $_POST['names'];
    }
    if(!empty($_POST['subject'])){
        $subject = $_POST['subject'];
    }
    if(!empty($_POST['email'])){
        $email = $_POST['email'];
    }
    if(!empty($_POST['phone'])){
        $phone = $_POST['phone'];
    }
    if(!empty($_POST['message'])){
        $message = $_POST['message'];
    }else{
        $error = "Fill all fields";
    }
    if(empty($error)){
        echo $email;
        include("sendemail.php");
        send_email($name,$subject,$email,$phone,$message);
    }

}

?>