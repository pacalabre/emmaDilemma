<?php
/**
 * The Contact template file
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
    <section class="container">
      <section class="row">
        <form method="POST" action="http://formspree.io/egmyers@gmail.com" class="col s8 offset-s2 contact-form">
          <div class="row">
            <section class="col s12 l6">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <label for="icon_prefix">Name</label>
                <input type="text" name="name" id="icon_prefix" class="validate">
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <label for="icon_prefix">Email</label>
                <input type="email" name="email" id="icon_prefix" type="text" class="validate">
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                <label for="icon_telephone">Telephone</label>
                <input type="number" name="number" id="icon_telephone" type="tel" class="validate">
              </div>
            </section>
            <div class="input-field col s12 l5 offset-l1">
              <i class="material-icons prefix">mode_edit</i>
              <label for="textarea1">Message</label>
              <textarea name="message" id="textarea1" class="materialize-textarea"></textarea>
            </div>
          </div>
          <button class="btn" type="submit">Send</button>
        </form>
      </section>
    </section>
  </main>
</section>
<section class="section-all-work">
  <a class="allwork-btn btn" href="../work">View All Work</a>
</section>
<?php
    get_footer();
?>