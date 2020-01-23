<?php

if($_POST){

    $name = $_POST['name'];
    
     $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    

    mail("contact@gqcontracting.ca", $name, $message, "From: $mailFrom\r\n");
    
}
    ?>