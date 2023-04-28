<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'posts_per_page' => 4,
    'paged' => $paged
);
$query = new WP_Query($args);
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>
        <div class="content">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <small><?php the_category()?></small>
            <hr>
        </div>
    <?php endwhile; ?>

    <div class="pagination">
        <?php next_posts_link("<< Older Entries", $query->max_num_pages) ?>
        <?php previous_posts_link("Newer Entries >>") ?>
    </div>

<?php endif; ?>
