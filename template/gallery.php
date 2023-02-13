<?php

/**
 * Template Name: Gallery Page
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<header class="page--header">
  <div class="container mx-auto">
    <h1>Gallery</h1>
  </div>
</header>
<main id="gallery-page">
  <div class="container mx-auto py-9">
    <div class="gallery-container grid grid-cols-12 gap-12 place-content-center">
      <?php
      $args = array(
        'post_type' => 'gallery',
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

        <div class="w-1/3">
          <a href="<?php echo $thumb_url[0]; ?>" class="magnify" title="<?php the_title(); ?>">
            <img src="<?php echo $thumb_url[0] ?>" alt="" class="px-2 object-cover pb-4 ">
          </a>
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
