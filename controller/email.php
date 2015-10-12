<?php
    $email = $_POST['email'];
    $name = $_POST['name'];
    $body = $_POST['body'];

    mail($email,'From: '.$name,$body);
?>