<?php get_header(); ?>
<div class="container content">
    <div class="main block">
        <?php if(have_posts()): ?>
        <?php while(have_posts()) : the_post(); ?>
        <article class="page">
            <?php if(page_is_parent() || $post->post_parent > 0): ?>
            <nav class="nav sub-nav">
                <ul>
                    <span class="parent-link"><a href="<?php get_the_permalink(get_top_parent()); ?>">
                            <?php echo get_the_title(get_top_parent()); ?>
                        </a>
                    </span>
                    <?php
                        $args = array(
                        'child_of' => get_top_parent(),
                        'title_li' => ''
                        );
                    ?>
                    <?php wp_list_pages($args); ?>
                </ul>
            </nav>
            <div class="clr"></div>
            <?php endif; ?>
            <h2>
                <?php the_title(); ?>
            </h2>
            <p class="phone">1-800-555-5555</p>
            <?php the_content(); ?>
        </article>
        <?php endwhile; ?>
        <?php else : ?>
        <?php echo wpautop('Sorry, no posts found.'); ?>
        <?php endif; ?>
    </div>
    <div class="side">
        <div class="block">
            <h3>Sidebar Head</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a class="button">More</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>