<?php get_header('page'); ?>

<?php the_post(); ?>

<main>
    
    <div class="single-page-container">
        <h1><?php the_title(); ?></h1>
        <div>
            <?php the_content(); ?>

            <?php comments_template(); ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>