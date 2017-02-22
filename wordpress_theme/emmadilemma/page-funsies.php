<?php
/**
 * Template Name: Funsies Work Page
 *
 * This is the template that displays the posts with the category of funsies.
 *
 * @package CustomTheme
 * @since CustomTheme 1.0
 */
 get_header(); 
 ?>
<section id="Container" class="container">
    <h2 class="section-headline section-headline-blog-page">Funsies</h2>
    <div class="col s10 offset-s1 section-blog-content">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) :  the_post(); ?>
               <?php the_content(); ?>     
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <?php get_template_part('template-parts/projectcat', 'single'); ?>
    <div class="row gallery-container">
        <section>
            <?php $my_query = new WP_Query( 'category_name=funsies>' ); ?>
            
            <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
            	<a class=" img-responsive project-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                  <div class="tint4 col s12 m4 offset-m0">
                    <h3 class="section-projects-h3"><?php the_title(); ?></h3>
                    <h4 class="section-projects-h4"><?php the_meta(); ?></h4>
                    <?php the_post_thumbnail();?>
                  </div>
                </a>
            <?php endwhile; ?>
        </section>
    </div>
</section>
<?php
get_footer();
?>
