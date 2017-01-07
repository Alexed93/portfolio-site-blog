<?php
    // Start the session
    session_start();

    $errors = '';
    $success = '';

    $email = $_POST['email']; 

    if(!($_POST['name']) || !($_POST['email']) || !($_POST['comments'])) {
        // $errors .= "\n Error: please input a name, email address and your message.";
        $_SESSION['errors'] = "\n Error: please input a name, email address and your message.";
        header("Location: /contact");
    }

    if (!preg_match(
        "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email)) 
    {
        $errors .= "\n Error: Invalid email address";
        echo $errors;
    }

    // Blank message to start with so we can append to it.
    $message = '';
    
// Construct the message
if( empty($errors)) {
    $message .= "
        Name: {$_POST['name']}
        Email: {$_POST['email']}
        Number: {$_POST['number']}
        Enquiry-type: {$_POST['enquiry-options']}
        Message: {$_POST['comments']}
";
    // test@testdomain.com
    $to = 'dippyalex@hotmail.co.uk'; 
    $subject = 'Message from Portfolio';
    $from = 'Alex Edwards';
    // YourSite@domain.com
    $fromEmail = 'dippyalex@hotmail.co.uk';
    $header = 'From: ' . $from . '<' . $fromEmail . '>';

    $success .= "\n Success! Your message has been sent. You should receive a reply within 48 hours.";
    echo $success;
    header("Location: /contact");
}
?>
