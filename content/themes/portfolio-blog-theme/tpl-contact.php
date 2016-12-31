<?php

/**
 * Template name: Contact
 */

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

        <?php
            global $reg_errors;
            $reg_errors = new WP_Error;
        ?>
        
        <?php if( $_POST[''] ) : ?>
            <?php if ( empty( $_POST['name'] ) || empty( $_POST['email'] ) || empty( $_POST['comments'] ) ) : ?>
               <?php $reg_errors->add('field', 'Required form field is missing'); ?>
            <?php endif; ?>

            <?php if ( !is_email( $_POST['email'] ) ) : ?>
               <?php $reg_errors->add( 'email_invalid', 'Email is not valid' ); ?>
            <?php endif; ?>

            <?php if ( !is_numeric( $_POST['number'] ) ) : // try ctype_digit() if this doesn't work ?>
                <?php $reg_errors->add( 'number_invalid', 'Number is not valid' ); ?>
            <?php endif; ?>

            <?php if ( is_wp_error( $reg_errors ) ) : ?>
                <?php foreach ( $reg_errors->get_error_messages() as $error ) : ?>
                    <?php   
                        echo '<div>';
                        echo '<strong>ERROR</strong>:';
                        echo $error . '<br/>';
                        echo '</div>';
                    ?>
                <?php endforeach; ?>
                <?php else: ?>
                    <?php if ( isset($_POST['submit'] ) ) : ?>
                        <?php
                            echo "winning";
                            $from = 'alexeddesign@gmail.com';
                            $to = $_POST['email'];
                            $subject = $_POST['enquiry-options'];
                            $message = $_POST['comments'];
                            $headers  = 'MIME-Version: 1.0' . "\r\n";
                            $headers .= "Content-type: text/html; charset=utf-8 \r\n";
                            $headers .= 'To: Author <' .$to . ' >' . "\r\n";
                            $headers .= 'From: '.$author.' <'.$from.'>' . "\r\n";
                            mail($to, $subject, $message, $headers);
                        ?>
                    <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>

        <form action="" method="post"">
            <fieldset class="contact_form">
                <label>Introduce yourself<span class="grey"> (required)</span><br>
                    <input type="text" name="name" placeholder="Your name" class="u-push-bottom">
                </label><br>
                
                <label>Where can I find you?<span class="grey"> (required)</span><br>
                    <input type="email" name="email" placeholder="Your email address" class="u-push-bottom">
                </label><br>
                
                <label>Would you prefer me to call?<br>
                    <input type="text" name="number" placeholder="Your contact number" class="u-push-bottom">
                </label><br>
                
                <label>The nature of your message:<br>
                <select name="enquiry-options" class="u-push-bottom">
                    <option value="Large project">Large project</option>
                    <option value="Small project">Small project</option>
                    <option value="Web only">Web only</option>
                    <option value="Branding only">Branding only</option>
                    <option value="Other">Other</option>
                </select></label><br>

                <label>How can I help?<span class="grey"> (required)</span><br>
                <textarea name="comments" class="u-push-bottom" placeholder="Your message"></textarea></label><br>
                
                <label>Do you need to send me any files?<br>
                    <input type="radio" name="files" value="no" checked="checked" class="u-push-bottom | attach-file-no"> No
                    <input type="radio" name="files" value="yes" class="u-push-bottom u-push-left | attach-file-yes"> Yes
                </label>
                <label class="attach-file-box | is-hidden">
                    <input type="file" name="file" class="attach-file-box-input">
                </label><br>
                
                <div class="send-clear">
                    <input type="submit" name="submit" value="Send" class="btn btn--primary">
                    <input type="reset" name="clear" value="Clear" class="btn btn--primary">
                </div>
            </fieldset>
        </form>

    </div>
</div>

<?php get_footer(); ?>
