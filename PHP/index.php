<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BS_GROUP</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
    body {
	background-image: url(back.jpg) ;
        background-repeat: no-repeat;
        background-size: cover;
}

	.login-form {
		width: 540px;
    	margin: 200px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: rgba(255, 255, 255, 0.4);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        height: 500px;
        width: 600px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form method="post">
        <h2 class="text-center">Mailer</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required" name="email">
            
            <input type = "text" name="subject" class="form-control" style="margin-top: 16px" placeholder="Subject"/>
        </div>
        
        <div class="form-group">
            <textarea rows="4" cols="50" class="form-control" placeholder="Message" name="message" style="resize: none"></textarea> 
        </div>
        
        <input type="file" name="attachment" style="margin-bottom: 20px"/>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Send</button>
        </div>          
    </form>
</div>

<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';

$mail->Username='sanjaypa70@gmail.com';
$mail->Password='srp14131211';

$mail->setFrom('sanjaypa70@gmail.com','JayYogershwar');
$mail->addAddress($_POST['email']);
// $mail->addReplyTo('kanadpa31@gmail.com');

$mail->isHTML();
$mail->Subject=$_POST['subject'];
$mail->Body= $_POST['message'];
if(!$mail->send())
{
	echo "lol";
}
else
{
	echo "success!";
}

?>

</body>
</html>



