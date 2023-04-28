<?php get_header();?>

<?php
    if (have_posts()):
        while(have_posts()):the_post();
        
        the_title();
        the_content();
        ?>
        <?php next_posts_link("<<older") ?>
        <?php previous_posts_link("new>>") ?>
    <?php
    endwhile;
    
endif;
?>




<?php get_footer(); ?>