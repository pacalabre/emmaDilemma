<?php
/**
 * The single template file
 *
 * This is the template for a single blog post
 *
 * @package CustomTheme
 * @since CustomTheme 1.0
 */
 get_header();
 ?>
<div class="container">
    <div class="row">
        <main class="col s12 single-main">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) :  the_post(); ?>
                    <h2 class="single-h2"><?php the_title(); ?></h2>
                    <div class="col s10 offset-s1 m10 offset-m1 l8 offset-l2">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </main>
    </div>
</div>
<?php
get_footer();
?>

