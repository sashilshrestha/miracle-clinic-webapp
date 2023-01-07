<?php

/**
 * Template Name: Team Page
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<header class="page--header">
  <div class="container mx-auto text-center">
    <h3 class="text-3xl font-normal">Meet Our Team</h3>
    <h1>Experts with empathy, Ready to help you</h1>
    <p>Our expert doctors and practitioners serve you with the highest quality derma care.</p>
  </div>
</header>
<main id="team-page">
  <div id="team">
    <div class="team-content py-28">
      <div class="container mx-auto">
        <div class="flex justify-center flex-wrap gap-16">
          <?php
          for ($x = 0; $x < 6; $x++) {
          ?>
            <div class="person-container">
              <div class="person-circle">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mohan-bhusal.png" alt="">
              </div>
              <h1>Dr.Mohan Bhusal</h1>
              <h6>Dermato-venereologist, Laser and Hair Specialist
              </h6>
            </div>
          <?php
          }
          ?>
          <div class="person-container">
            <div class="person-circle">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/elisha-bhattrai.png" alt="">
            </div>
            <h1>Dr. Elisha Bhattrai</h1>
            <h6>Dermato-venereologist, Laser and Hair Specialist
            </h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
