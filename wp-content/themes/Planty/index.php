<?php get_header(); ?>
<main>
    <p><?php bloginfo('description'); ?></p>
    <?php
    if (have_posts()) : 
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>
<?php get_footer(); ?>