<?php

/**
 * Template Name: Career Page
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<header class="page--header">
  <div class="container mx-auto">
    <h1>Culture Empowering Transformation</h1>
    <p>We believe in a work environment where our team feels supported, respected and understood.</p>
  </div>
</header>

<?php
$count = wp_count_posts('careers');
if ($count->publish > 0) {
?>
  <main id="career-page">
    <div class="container mx-auto">
      <div id="offers" class="my-20">
        <div class="offers-content">
          <div class="container mx-auto">
            <div class="flex flex-wrap gap-6 justify-center">
              <!-- Post Calling Loop Started -->
              <?php
              $args = array(
                'post_type' => 'careers',
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
                <div class="card">
                  <div>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <h6>Posted on: <?php echo get_the_date() ?>
                    </h6>
                  </div>
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
    </div>
  </main>
<?php
} else {
?>
  <main class="text-center text-3xl font-bold py-10">
    <h3>No available Jobs</h3>
  </main>
<?php
}
?>

<div id="queries">
  <div class="container mx-auto flex flex-col items-center">
    <h1 class="text-center !text-4xl" style="line-height: 140% !important">Can’t find the position you’re looking for? Send your resume and we’ll contact you when the next post relevant to your CV, is vacant.</h1>
    <button class="button primary !rounded-full"><a href="#" class="text-2xl">miracleskinhair@gmail.com</a></button>
  </div>
</div>
<?php
get_footer();
