<!-- 
    
    Template Name: Blog NKS  

-->

<?php get_header('offers'); ?>   
<div class="main-container">
<div class="content">
    <main>
        <header>
            <h1 class="main-content-header">Oferta na sezon 2020</h1>
        </header>
        <div class="main-content-container">

            <?php if(have_posts()) :?>

            <?php while (have_posts()) : the_post() ;?>

                <div id="blog-<?php the_ID();?>" <?php post_class('post-min');?>>
                    <article>
                        <h2 class="post-min-header"><?php the_title();?></h2>
                        <img class="post-min-img" src="<?php the_post_thumbnail();?>" alt="nepal">
                        <ul class="post-min-text">
                            <li><b>Lokalizacja:</b> Nepal</li>
                            <li><b>Termin:</b> czerwiec do październik 2020</li>
                            <li><b>Cena wyprawy:</b> 9 000,00 zł</li>
                            <li><b>Cena biletu lotniczego:</b> 7 500,00 zł</li>
                        </ul>
                        <div class="post-min-buttons">
                            <a href="<?php the_permalink();?>"><button class="post-min-button button">Szczegóły wyprawy</button></a>
                            <a href="<?php the_permalink();?>"><button class="post-min-button button">Zarezerwuj podróż</button></a>
                        </div>
                    </article>
                </div>

            <?php endwhile; ?>

            <?php else: ?>
            <h4>Nie ma żadnych postów</h4>
            <?php endif; ?>

        </div>
    </main>
</div>
<?php get_sidebar('archive-offers'); ?>
</div>

<?php get_footer(); ?>