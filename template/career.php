<?php

/**
 * Template Name: Career Page
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<header class="page--header mb-20">
  <div class="container mx-auto">
    <h1>Culture Empowering Transformation</h1>
    <p>We believe in a work environment where our team feels supported, respected and understood.</p>
  </div>
</header>
<main id="career-page">
  <div class="container mx-auto">
    <div id="offers">
      <div class="offers-content">
        <div class="container mx-auto">
          <div class="flex flex-wrap gap-6 justify-center">
            <?php
            for ($x = 0; $x < 5; $x++) {
            ?>
              <div class="card">
                <div>
                  <h1>Save 15% On</h1>
                  <h2>Acne Scar Removal</h2>
                  <h6>Remove acne to reveal your healthy glow of the skin.
                  </h6>
                </div>
                <div>
                  <div class="book-now-icon">
                    <h3>Book Now</h3>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<div id="queries" class="mt-20">
  <div class="container mx-auto flex flex-col items-center">
    <h1 class="text-center !text-4xl" style="line-height: 140% !important">Can’t find the position you’re looking for? Send your resume and we’ll contact you when the next post relevant to your CV, is vacant.</h1>
    <button class="button primary !rounded-full"><a href="#" class="text-2xl">hr@miracle.com</a></button>
  </div>
</div>
<?php
get_footer();
