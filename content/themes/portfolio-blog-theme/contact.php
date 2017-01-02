<?php

    // Blank message to start with so we can append to it.
    $message = '';

    // Check that name & email aren't empty
    if( empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comments']) ) {
        die('Please ensure a name, email and your message are provided.'); 
    }

    // Construct the message
    $message .= <<<TEXT
        Name: {$_POST['name']}
        Email: {$_POST['email']}
        Number: {$_POST['number']}
        Enquiry-type: {$_POST['enquiry-options']}
        Message: {$_POST['comments']}   
        Attachment: {$_POST['file']}
TEXT;

    // test@testdomain.com
    $to = 'dippyalex@hotmail.co.uk'; 
    $subject = 'Message from Portfolio';
    $from = 'Alex Edwards';
    // YourSite@domain.com
    $fromEmail = 'dippyalex@hotmail.co.uk';

    $header = 'From: ' . $from . '<' . $fromEmail . '>';

    if(!mail($to, $subject, $message, $header)){
        die('Error sending.');
    }else{
        die('Your message has been successfully sent!');
    }

?>
