


<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
</head>
<body>
 <?php



function clean($details){
      $details=trim($details);
      $details=stripcslashes($details);
      $details=htmlspecialchars($details);
      
       return $details;
     }

    

if ($_SERVER["REQUEST_METHOD"]=="POST") {


if (empty($_POST['name'])) {
   echo "name can't be empty";
}else{

  $name=clean($_POST['name']);

  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
     echo  "Only letters and white space allowed in name field.";
          
    }else{

if (empty($_POST["email"])) {
  echo  "Email can't be empty.";
          
}else{
$email=clean($_POST["email"]);


  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 echo " Invalid Email format .";
            
}else{
if (empty($_POST["msg"])) {
  echo " Try and type In something .";
}else{
$msg=clean($_POST["msg"]);
require_once ("PHPMailer/class.phpmailer.php");
    require_once ("PHPMailer/PHPMailerAutoload.php");
    // echo !extension_loaded('openssl')?"Not Available":"Available";
  $mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP

$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "ojanne99@gmail.com";
$mail->Password = "Neebsy134";
$mail->SetFrom("".$email."");
$mail->Subject = "Message from your website";
$mail->Body = "Name:".$name."<br>Email:".$email."<br>
Message:".$msg."";
$mail->AddAddress("ojanne99@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
}


}


}
}
}
}
?>
</body>
</html>