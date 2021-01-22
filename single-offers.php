<?php get_header('page'); ?>

<?php the_post(); ?>

<main>
    
    <div class="single-page-container">
        <h1><?php the_title(); ?></h1>
        <div>
            <?php the_content(); ?>
        </div>
        <div class="post-min-buttons">
            <a href="<?php the_permalink();?>"><button class="post-min-button button">Zarezerwuj podróż</button></a>
        </div>
        <?php comments_template(); ?>
    </div>
    
</main>

<?php get_footer(); ?>