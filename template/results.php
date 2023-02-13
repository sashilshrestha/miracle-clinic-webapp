<?php

/**
 * Template Name: Results Page
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<header class="page--header">
  <div class="container mx-auto">
    <h1>Results</h1>
  </div>
</header>
<main id="results-page">
  <div class="container mx-auto">
    <div class="results-container grid grid-cols-12 gap-12 place-content-center">
      <?php
      $args = array(
        'post_type' => 'results',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'order' => 'DESC',
        'orderby' => 'publish_date',
      );
      $newsposts = new WP_Query($args);

      while ($newsposts->have_posts()) :
        $newsposts->the_post();

        $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
      ?>
        <div class="result-card">
          <img src="<?php echo $thumb_url[0] ?>" alt="" class="w-full h-full object-cover img-thumbnail">
          <div class="result-description">
            <div class="name"><?php the_title() ?></div>
            <div class="details">
              <div><span class="details-title">Concerns: </span><span class="details-treatment"><?php echo get_field('concerns') ?></span></div>
              <div><span class="details-title">Treatment: </span><span class="details-treatment"><?php echo get_field('treatment') ?></span></div>
            </div>
            <div class="read-more">
              <a href="<?php the_permalink() ?>">Read Testimonial >></a>
              <span>Date: 28 Oct 2022</span>
            </div>
          </div>
        </div>
      <?php
      endwhile;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</main>
<?php
get_footer();
