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
          ?>
            <!-- Loop Started -->
            <div class="person-container">
              <div class="person-circle">
                <img src="<?php echo $thumb_url[0] ?>" alt="">
              </div>
              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <h6>Dermato-venereologist, Laser and Hair Specialist
              </h6>
            </div>
            <!-- Loop Ended -->
          <?php
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
