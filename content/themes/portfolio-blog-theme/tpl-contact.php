<?php

/**
 * Template name: Contact
 */

// Start the session
// session_start();

// Get the header
get_header();

?>

<div class="container | u-top-bottom-space">
    <div class="secondary-introduction | container--small">
        <div class="secondary_heading">
            <h1>Contact me</h1>
            <h2 class="highlight">I'd love to work with you.</h2>
        </div>
        <div class="secondary_excerpt | bordertop">
            <h3><?php $content = get_the_content(); echo $content; ?></h3>
        </div>
    </div>
    <div class="contact | container--extrasmall | u-centered">
    <?php if(isset($_POST['submit'])): ?>
        <?php 
            // Validation goes here
            $errors = '';
            $success = 'Success! Your message has been sent. You should receive a reply within 48 hours.';

            $email = strip_tags( trim( $_POST[ "theemail" ] ) );
            $name = strip_tags( trim( $_POST[ "thename" ] ) );
            $comments = trim( $_POST[ "comments" ] );
            $number = strip_tags( trim( $_POST[ "number" ] ) );

            if(empty($name) || empty($email) || empty($comments) ) {
                $errors .= "Error: Input a name, email address and your message.<br>";
            } 

            if (!empty($email) && !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email)) {
                $errors .= "Error: Invalid email address<br>";
            } 

            if (!empty($number) && !preg_match("/^\(?0( *\d\)?){9,10}$/", $number)) {
                $errors .= "Error: Invalid phone number<br>";
            }

        ?>
        <!-- Display red error box or green success box depending on which is true -->
        <?php if(!empty($errors)): ?>
            <div class="validationbox | errorsbox">
                <?php echo $errors; ?>
            </div>
        <?php elseif(empty($errors)): ?>
            <div class="validationbox | successbox">
                <?php echo $success; ?>
            </div>
            <?php 
                $message = ''; // Blank message to start with so we can append to it.

                // Construct the message
                $message .= "
                    Name: {$_POST['thename']};
                    Email: {$_POST['theemail']};
                    Number: {$_POST['number']};
                    Enquiry-type: {$_POST['enquiry-options']};
                    Message: {$_POST['comments']};
";
                // test@testdomain.com
                $to = 'alexeddesign@gmail.com'; 
                $subject = 'Message from Portfolio';
                $from = $_POST['thename'];
                // YourSite@domain.com
                $fromEmail = 'noreply@alexed.co.uk';
                $header = 'From: ' . $from . '<' . $fromEmail . '>';
                mail($to,$subject,$message,$header);
            ?>
        <?php endif; ?>
    <?php endif; ?>

        <form action="" method="post">
            <fieldset class="contact_form">
                <label>Introduce yourself<span class="grey"> (required)</span><br>
                    <input type="text" name="thename" placeholder="Your name" required class="u-push-bottom" id="name">
                </label><br>
                <label>Where can I find you?<span class="grey"> (required)</span><br>
                    <input type="email" name="theemail" placeholder="Your email address" required class="u-push-bottom" id="email">
                </label><br>
                
                <label>Would you prefer me to call?<br>
                    <input type="text" name="number" placeholder="Your contact number" class="u-push-bottom" id="number">
                </label><br>
                
                <label>The nature of your message: <span class="grey"> (required)</span><br>
                <select name="enquiry-options" required class="u-push-bottom" id="enquiry-options">
                    <option value="Large project">Large project</option>
                    <option value="Small project">Small project</option>
                    <option value="Web only">Web only</option>
                    <option value="Branding only">Branding only</option>
                    <option value="Other">Other</option>
                </select>
                </label><br>

                <label>How can I help?<br>
                <textarea name="comments" class="u-push-bottom" placeholder="Your message" id="comments"></textarea></label><br>
                
                <!-- <label>Do you need to send me any files?<br>
                    <input type="radio" name="files" value="no" checked="checked" class="u-push-bottom | attach-file-no"> No
                    <input type="radio" name="files" value="yes" class="u-push-bottom u-push-left | attach-file-yes"> Yes
                </label>
                <label class="attach-file-box | is-hidden">
                    <input type="file" name="file" class="attach-file-box-input" id="file">
                </label><br> -->

                <input class="honeypot" type="text" name="email" size="25" value="">
                
                <div class="send-clear">
                    <input type="submit" name="submit" value="Send" class="btn btn--primary" id="submit-button">
                    <input type="reset" name="clear" value="Clear" class="btn btn--primary">
                </div>
            </fieldset>
        </form>
    </div>
</div>

<?php get_footer(); ?>
