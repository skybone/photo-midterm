

<?php $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['message'];
    $subject = "Email submission from Skylyy.com";
    $emailto = "slyyti@gmail.com";
    $header = "From: $name <$email>\r\nReply-To: $email\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type:text/html;charset=iso-8859-1\r\n";
    $message = "From: $name, Email: $email<br /><hr />$text";
    mail($emailto, $subject, $message, $header);

    header("Location: index.php");
?>

             