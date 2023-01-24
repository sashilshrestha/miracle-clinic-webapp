<?php

/**
 * Template Name: News Page
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
  <div class="container mx-auto py-9">
    <div class="top-news">
      <?php
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'order' => 'DESC',
        'orderby' => 'publish_date',
      );
      $newsposts = new WP_Query($args);

      while ($newsposts->have_posts()) :
        $newsposts->the_post();

        $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
      ?>
        <div class="top-card">
          <div class="overlay"></div>
          <img src="<?php echo $thumb_url[0] ?>" alt="">
          <div class="card-content">
            <p class="mb-4">12th July, 2023</p>
            <h1 class=""><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
          </div>
        </div>
      <?php
        $not_in_three[] = get_the_ID();
      endwhile;
      wp_reset_postdata();
      ?>
    </div>
    <div class="news-card-container">
      <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-6">
          <?php
          $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'order' => 'DESC',
            'orderby' => 'publish_date',
            'post__not_in' => $not_in_three,
          );
          $newsposts = new WP_Query($args);

          while ($newsposts->have_posts()) :
            $newsposts->the_post();

            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
          ?>
            <div class="card ">
              <img src="<?php echo $thumb_url[0] ?>" alt="">
              <div class="card-content">
                <h4><?php the_title() ?></h4>
                <p>Get Insights, Information and Care Tips about Skin Hair and Aesthetic Delivered Unsubscribe at any time...</p>
                <div class="readmore">
                  <a href="<?php the_permalink(); ?>">Read Full Article >></a>
                  <span>Mar 10, 2022</span>
                </div>
              </div>
            </div>
          <?php
          endwhile;
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
