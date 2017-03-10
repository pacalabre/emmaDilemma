<?php
/**
 * The header template file
 *
 *
 *
 * @package emmadilemma
 * @since emmadilemma 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <link rel="profile" href="http://gmpg.org/xfn/11" />
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
      <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
      <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="/" class="brand-logo"><img class="nav-logo" src="/wp-content/themes/emmadilemma/images/emmaLogo2.png"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="nav-hamburger material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down nav-ul">
          <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'primary-menu',
                'container'      => false,
                'items_wrap'     => '%3$s'
                ));
          ?>
          <!--<li class="nav-ul-li"><a href="#"><h5 class="nav-links" >About</h5></a></li>-->
          <!--<li class="nav-ul-li"><a href="../work"><h5 class="nav-links">Work</h5></a></li>-->
          <!--<li><a href="../contact"><h5 class="nav-links nav-links-contact">Contact</h5></a></li>-->
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="../about"><h5 class="side-nav-link">About</h5></a></li>
          <li><a href="../work"><h5 class="side-nav-link">Work</h5></a></li>
          <li><a href="../contact"><h5 class="side-nav-link ">Contact</h5></a></li>
        </ul>
      </div>
    </nav>
  </div>
  <main>
