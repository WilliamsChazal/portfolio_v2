

<?php
if(isset($_POST['user_mail'])&& !empty($_POST['user_mail'])){
    $email = $_POST['user_mail'];
    $objet = $_POST['user_sujet'];
    $nom = $_POST['user_firstname'];
    $prenom = $_POST['user_name'];
    $message = $_POST['user_message'];
    $recipient = 'wchazal26@gmail.com';
    $send = 'message envoyé par '.$email.' : '.$message;
    $headerFields = array(
      "From: {$email}",
      "MIME-Version: 1.0",
      "Content-Type: text/html;charset=utf-8"
      );
    mail($recipient, $objet, $send, implode("\r\n", $headerFields));
    echo "<script type='text/javascript'>alert('Message ENvoyé');</script>";
}




