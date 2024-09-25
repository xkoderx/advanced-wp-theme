<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
    <header>
        <div class="container">
            <h1><a href="index.html">
                    <?php bloginfo('name') ?>
                </a>
                <small>
                    <?php bloginfo('description') ?>
                </small>
            </h1>
            <div class="h_right">
                <form method="get" action="<?php esc_url(home_url('/')); ?>">
                    <input type="text" placeholder="Buscar...">
                </form>
            </div>
        </div>
    </header>
    <nav class="nav main-nav">
        <div class="container">
            <?php 
            $args = array('theme_location' => 'primary');
            ?>
            <?php  wp_nav_menu($args); ?>
        </div>
    </nav>
    <div class="container content">
        <div class="main block">
            <article class="post">
                <h1>Blog Post 1</h1>
                <p class="meta">Posted at 11:00 on May 9 by admin</p>
                aliqua. Incididunt ut ullamco ut ut. Excepteur eiusmod cillum nostrud consequat adipisicing dolor amet
                laboris aliquip in labore. Ipsum officia ut ea cillum.
            </article>
            <article class="post">
                <h1>Blog Post 1</h1>
                <p class="meta">Posted at 11:00 on May 9 by admin</p>
                aliqua. Incididunt ut ullamco ut ut. Excepteur eiusmod cillum nostrud consequat adipisicing dolor amet
                laboris aliquip in labore. Ipsum officia ut ea cillum.
            </article>
            <article class="post">
                <h1>Blog Post 1</h1>
                <p class="meta">Posted at 11:00 on May 9 by admin</p>
                aliqua. Incididunt ut ullamco ut ut. Excepteur eiusmod cillum nostrud consequat adipisicing dolor amet
                laboris aliquip in labore. Ipsum officia ut ea cillum.
            </article>
            <a class="button" href="#">Read More</a>
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
    <footer class="main-footer">
        <div class="container">
            <div class="f_left">
                <p>Todos los derechos Reservados &copy; 2024 - Advanced WP Theme</p>
            </div>
            <div class="f_right">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>