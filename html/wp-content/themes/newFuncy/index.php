<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <title>NEW FUNCY</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri();?>"/>


</head>

<body>
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<div id="cuerpo">
    <?php
    echo get_stylesheet_uri();
    echo "<h1 class='morado'>BIENVENIDO</h1>";
    ?>

    <!-- Start the Loop. -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <div class="post">
            <div class="imagen"><?php the_post_thumbnail([150,150]);?> </div>

            <div class="link">
            <h2><a class="entry" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <!--<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>-->
            </div>

            <br>

            <div class="entry">
                <?php
                the_excerpt();
                ?>
            </div>


            <!--<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>-->
        </div>
        <br>

      <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>


<?php get_footer() ?>
</body>
</html>


