

<?php require "../init/config.php";

include "check_auth.php";

$my_email = "codeaix@hotmail.com";

$name = $_POST['name'];

$email = $_POST['email'];

$message = "اسم العميل: ". $name. "</br>". "رسالة العميل : ". $_POST['message'];

 $headers   = 'From: '. $email. "\r\n" .

    'Reply-To: '. $email . "\r\n";

    $headers  .= "MIME-Version: 1.0".PHP_EOL;

    $headers  .= "Content-Type: text/html; charset=UTF-8";



mail($my_email,"دعم فني - سكربت ساند",$message,$headers);



?>
