<?php
/**
 * Template Name: Portfolio Template
 */

get_header() ?>

<?php
    $args = [
        'post_type' => 'portfolio',
        'post_per_page' => 3,
    ];

    $postfolios = new WP_Query($args);

    if($postfolios->have_posts()):
        while($postfolios->have_post()):$postfolios->the_post();
?>
            <div class="card">
            <div class="card-header">
                <?php the_title(sprintf('<h2 class="entry-title"> <a href="%s">', esc_url(get_permalink() )), '</a></h2>') ?>
            </div>
            <div class="card-body">
                <h5 class="thumbnail-img"><?php the_post_thumbnail('thumbnail') ?></h5>
                <p class="card-text"><?php the_content() ?></p>
                <p class="card-text"><?php the_category() ?></p>
                
            </div>
            </div>

<?php
        endwhile;
    endif;
?>
<?php get_footer() ?>