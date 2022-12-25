<?php

/**
 * Template Name: News Inner Page
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<header class="page--header">
  <div class="container mx-auto">
    <h1>Latest news from Miracle</h1>
    <p>Find out the latest news and what’s happening at Miracle Clinic.</p>
  </div>
</header>
<main id="news-page">
  <div class="container mx-auto py-24">
    <div class="top-news">
      <?php
      for ($x = 0; $x < 3; $x++) {
      ?>
        <div class="top-card">
          <div class="overlay"></div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" alt="">
          <div class="card-content">
            <p>12th July, 2023</p>
            <h1><a href="">Pokemon Sword and Shield Are Holding a New Gigantamax Pokemon Event</a></h1>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <div class="news-card-container">
      <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-6">
          <?php
          for ($x = 0; $x < 9; $x++) {
          ?>
            <div class="card ">
              <img src="https://media.istockphoto.com/id/1182641010/photo/i-love-working-from-home.jpg?b=1&s=170667a&w=0&k=20&c=2Detuk6nIrbeZWmEKiGCIM7nvoGd04VWTXtmxQYYmp4=" alt="">
              <div class="card-content">
                <h4>5 Habits That Slowly Damage Your Skin</h4>
                <p>Get Insights, Information and Care Tips about Skin Hair and Aesthetic Delivered Unsubscribe at any time...</p>
                <div class="readmore">
                  <a href="<?php the_permalink(); ?>">Read Full Article >></a>
                  <span>Mar 10, 2022</span>
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
</main>
<?php
get_footer();
