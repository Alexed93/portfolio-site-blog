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
            <h3><?php the_content(); ?></h3>
        </div>
    </div>
    <div class="contact | container--extrasmall | u-centered">
        <form action="http://alexed.co.uk/contact.php" method="post">
            <fieldset class="contact_form">
                <label>Introduce yourself<span class="grey"> (required)</span><br>
                    <input type="text" name="name" placeholder="Your name" required="required" class="u-push-bottom">
                </label><br>
                
                <label>Where can I find you?<span class="grey"> (required)</span><br>
                    <input type="email" name="email" placeholder="Your email address" required="required" class="u-push-bottom">
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
                <textarea name="comments" required="required" class="u-push-bottom" placeholder="Your message"></textarea></label><br>
                
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
