<!DOCTYPE html>
<html>
<head>
    <title>Pressed and Squeezed</title>
    <script src="http://use.edgefonts.net/josefin-slab.js"></script>
    <script src="http://use.edgefonts.net/merriweather.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
<title><?php bloginfo("name"); ?></title>
</head>
<body>
<header>
    <h1><?php bloginfo("name"); ?></h1>
    <nav>
        <ul>
            <li>Home</li>
            <li>WordPress</li>
        </ul>
    </nav>
</header>

<section>
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/hero.jpg" />
    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        <section>
            <a href="<?php the_permalink() ?>"><h1><?php the_title_attribute(); ?></h1></a>
            <?php the_excerpt(); ?>
        </section>
        <!-- <section>
            <p>Pressed and Squeezed is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
            <p>We also make pancakes on the side. (And if you're really lucky, we'll make them with chocolate chips.)</p>
        </section> -->
    <?php endwhile; else : ?>
        <p><?php _e('Sorry, I Got Nothin&#39;'); ?></p>
    <?php endif; ?>


    <img src="http://localhost:8888//wordpress/wp-content/themes/pressedsqueezed/images/pancakes.jpg"/>
</section>
<footer>
    <h1>Contact Us</h1>
    <p>Pressed and Squeezed</p>
    <p>2525 Orange Way, Orchard, CA 91104</p>
    <p>Phone: (800) 424-3232</p>
</footer>
</body>
</html>