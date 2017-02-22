<?php
/**
 * The main template file
 * 
 *
 *
 * @package emmadilemma
 * @since emmadilemma 1.0
 */
 get_header();
?>

<section id="Container" class="container">
    <h2 class="section-headline section-headline-blog-page">Work</h2>
    <?php get_template_part('template-parts/projectcat', 'single'); ?>
    <div class="row gallery-container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) :  the_post(); ?>
                    <a class=" img-responsive project-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                      <div class="tint4 col s12 m4 offset-m0">
                        <h3 class="section-projects-h3"><?php the_title(); ?></h3>
                        <h4 class="section-projects-h4"><?php the_meta(); ?></h4>
                        <?php the_post_thumbnail();?>
                      </div>
                    </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
?>
