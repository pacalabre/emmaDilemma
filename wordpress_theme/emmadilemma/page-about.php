<?php
/**
 * The About template file
 * 
 *
 *
 * @package emmadilemma
 * @since emmadilemma 1.0
 */
 get_header();
?>
<section class="about-header row">
    <h1 class="about-h1"><?php the_title(); ?></h1>
</section>
<section class="container">
  <main class="row about-main">
    <div class="about-p col s10 offset-s1">
        <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) :  the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
    </div>
  </main>
</section>
<section class="section-all-work">
  <a class="allwork-btn btn" href="../work">View All Work</a>
</section>
<?php
    get_template_part('template-parts/sayhello', 'single'); 
    get_footer();
?>