<?php 
    // Get access to $post object
    global $post;

    // Get twitter handle
    $twitter = get_field('twitter', 'options');

    // define links
    $links = array(
        'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=' . get_permalink(),
        'twitter'  => "https://twitter.com/home?status=" . urlencode($post->post_title . " - " . get_permalink($post->ID)),
        'mail'     => 'mailto:?subject='. get_the_title() .'&body=Take a look at this link - ' . get_permalink(),
    );
?>

<div class="socialmedia-sharing | cf | u-push-top">
    <ul class="socialmedia-sharing__list | u-display-inline">
        <a href="<?php echo $links['facebook']; ?>" target="_blank">
            <li class=" fa | fa-facebook | fa-facebook--red | socialmedia-sharing__icon"></li>
        </a>
        <a href="<?php echo $links['twitter']; ?>" target="_blank">
            <li class=" fa | fa-twitter | fa-twitter--red | socialmedia-sharing__icon"></li>
        </a>
        <a href="<?php echo $links['mail']; ?>">
            <li class=" fa | fa-envelope | fa-envelope--red | socialmedia-sharing__icon"></li>
        </a>
    </ul>
</div>
 
