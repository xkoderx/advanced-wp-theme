<?php get_header(); ?>
<div class="container content">
    <div class="main block">
        <h1 class="page-header">
            <?php
                if(is_category()){
                    single_cat_title();
                } else if(is_author()){
                    the_post();
                    echo 'Publicaciones por autores: ' .get_the_author();
                    rewind_posts();
                } else if(is_tag()){
                    single_tag_title();
                } else if(is_day()){
                    echo 'Publicaciones por día: ' .get_the_date();
                } else if(is_month()){
                    echo 'Archives By Month: ' .get_the_date('F Y');
                } else if(is_year()){
                    echo 'Publicaciones por año: ' .get_the_date('Y');
                } else {
                    echo 'Publicaciones';
                }
            ?>
        </h1>
        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
        <?php get_template_part('content',get_post_format()); ?>
        <?php endwhile; ?>
        <?php else: ?>
        <?php wpautop('Disculpa, no se encontradron posts') ?>
        <?php endif; ?>
    </div>
    <div class="side">
        <div class="block">
            <h3>Sidebar Head</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nam vel diam hendrerit erat fermentum aliquet sed eget arcu.</p>
            <a class="button">More</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>