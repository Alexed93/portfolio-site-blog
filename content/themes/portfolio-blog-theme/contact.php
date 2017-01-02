<?php

    // Blank message to start with so we can append to it.
    $message = '';
    $errorMsg = '<script type="text/javascript"> alert("Please ensure a name, email and your message are provided."); </script>';
    $errorSending = '<script type="text/javascript"> alert("Error sending."); </script>';
    $sent = '<script type="text/javascript"> alert("Your message has been successfully sent!"); </script>';

    // Check that name & email aren't empty
    if( empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comments']) ) {
        echo $errorMsg;
        die('');

    }

    // Construct the message
    $message .= <<<TEXT
        Name: {$_POST['name']}
        Email: {$_POST['email']}
        Number: {$_POST['number']}
        Enquiry-type: {$_POST['enquiry-options']}
        Message: {$_POST['comments']}
TEXT;

    // test@testdomain.com
    $to = 'dippyalex@hotmail.co.uk'; 
    $subject = 'Message from Portfolio';
    $from = 'Alex Edwards';
    // YourSite@domain.com
    $fromEmail = 'dippyalex@hotmail.co.uk';

    $header = 'From: ' . $from . '<' . $fromEmail . '>';

    if(!mail($to, $subject, $message, $header)){
        echo $errorSending;
        die('');
    }else{
        echo $sent;
        die('');
    }

?>
