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
        <!-- Post Calling Loop Started -->
        <?php
        $args = array(
          'post_type' => 'teams',
          'post_status' => 'publish',
          'posts_per_page' => -1,
          'order' => 'ASC',
          'orderby' => 'publish_date',
        );
        $teamsposts = new WP_Query($args);

        while ($teamsposts->have_posts()) :
          $teamsposts->the_post();

          $thumb_id = get_post_thumbnail_id();
          $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);

          if (get_the_title() === 'Dr. Mohan Bhusal') {
        ?>
            <!-- Loop Started -->
            <div class="person-container main gap-8 !mb-14">
              <div class="person-circle" style="min-width: 18rem; height: 18rem">
                <img src="<?php echo $thumb_url[0] ?>" alt="">
              </div>
              <div class="w-1/2">
                <p><?php the_excerpt() ?></p>
                <h1 class="!mt-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <?php echo get_field('team_designation') ?>
              </div>
            </div>
            <!-- Loop Ended -->
        <?php
          }
        endwhile;
        wp_reset_postdata();
        ?>
        <!-- Post Calling Loop Ends -->
        <div class="flex justify-center flex-wrap gap-16">
          <!-- Post Calling Loop Started -->
          <?php
          $args = array(
            'post_type' => 'teams',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'order' => 'ASC',
            'orderby' => 'publish_date',
          );
          $teamsposts = new WP_Query($args);

          while ($teamsposts->have_posts()) :
            $teamsposts->the_post();

            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);

            if (get_the_title() !== 'Dr. Mohan Bhusal') {
          ?>
              <!-- Loop Started -->
              <div class="person-container">
                <div class="person-circle">
                  <img src="<?php echo $thumb_url[0] ?>" alt="">
                </div>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <?php echo get_field('team_designation') ?>
              </div>
              <!-- Loop Ended -->
          <?php
            }
          endwhile;
          wp_reset_postdata();
          ?>
          <!-- Post Calling Loop Ends -->
        </div>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
