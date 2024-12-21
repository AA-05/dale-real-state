<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

   
//email
$to = "engineer.akhil100@gmail.com ";
$subject = "Enquiry From Tarc Tripundra ";

$htmlContent = '<html>
<body>
<div style="background:#eceff0; padding:30px; font-family:Verdana, Geneva, sans-serif; font-size:13px;">
<div style="background:#fff; border:1px solid#ccc; padding:25px;">

// <img src="http://express-one.in/images/logo.png" alt="" style="width:200px;">

<br><br>
You have recived new enquiry from Tarc Tripundra <br><br>
Details are:<br><br>
Name: '.$_POST['name'].'<br>
Mobile: '.$_POST['mobile'].'<br>
Email:  '.$_POST['email'].'<br>


<br><br>
Team<br>
<strong>Tarc Tripundra</strong><br>
</div>
</div>
</body>
</html>';

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: engineer.akhil100@gmail.com'  . "\r\n";


// Send email
mail($to,$subject,$htmlContent,$headers);
  //end email
    header('Location: thanks.html');
}
?>