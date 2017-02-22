<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays the home page
 *
 * @package CustomTheme
 * @since CustomTheme 1.0
 */
get_header(); ?>
<section class="section-cover row">
   <!-- Video Header -->
      <video loop muted autoplay class="background-div-video background-div-video-sea desktop-header  section-header-img">
          <source src="/wp-content/themes/emmadilemma/emmaExtended.mp4" type="video/mp4">
      </video>
    </div>
    <!-- End Video -->
  <img class = "section-cover-img col s12" src="/wp-content/themes/emmadilemma/images/emma-logo-transparent.png" alt="Emma Dilemma Logo">
</section>
<section class="section-about">
  <h3 class="section-headline">THE WRITER</h3>
  <h5 class="section-text">When it comes to hiring a copywriter, you want someone who can write in all kinds of voices. And that’s exactly what I do. Some people call me the master of words, I tell them that’s weird.</h5>
  <a href="/index.php?page_id=4" class="btn">Learn More</a>
</section>
<section class="section-work">
  <div class="container-fluid">
    <h3 class="section-headline">THE WORK</h3>

    <h4 class="section-text">I’ve got the words to make it happen.</h4>
    <div class="row">
      <section class="col s12 m4 l4">
        <img class="section-work-img" src="/wp-content/themes/emmadilemma/images/advertising.png" alt="advertising image">
        <h3 class="section-work-h3">Advertising</h3>
      </section>

      <section class="col s12 m4 l4">
        <img class="section-work-img" src="/wp-content/themes/emmadilemma/images/webcontent.png" alt="webcontent image">
        <h3 class="section-work-h3">Web Content</h3>
      </section>

      <section class="col s12 m4 l4">
        <img class="section-work-img" src="/wp-content/themes/emmadilemma/images/funsies.png" alt="funsies image">
        <h3 class="section-work-h3">Funsies</h3>
      </section>
    </div>
  </div>
</section> 
<section class="section-projects">
  <div class="container-fluid">
    <?php 
      $args = array( 
      	'tag'   => 'featured',
      );
      $featured = new WP_Query( $args );
      if ( $featured->have_posts() ) : 
    ?>
    <section class="row">
      <?php while( $featured->have_posts() ) : $featured->the_post() ?>
        <a class="s6 m6 l6">
          <div class="tint4 s12 m5 l5 feature-projects">
            <h3 class="section-projects-h3"><?php the_title(); ?></h3>
            <h4 class="section-projects-h4"><?php the_meta(); ?></h4>
            <?php the_post_thumbnail();?>
          </div>
        </a>
      <?php endwhile ?>
      <?php endif ?>
    </section>
  </div>
</section>
  

<?php
    get_template_part('template-parts/allwork', 'single'); 
    get_template_part('template-parts/sayhello', 'single'); 
    get_footer();
?>