<?php
get_header();
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
?>
<main id="single-teams">
  <header class="page--header">
    <div class="container mx-auto">
      <div class="person-container">
        <div class="person-circle">
          <img src="<?php echo $thumb_url[0] ?>" alt="">
        </div>
      </div>
      <h1>
        <?php the_title(); ?>
      </h1>
      <?php echo get_field('team_designation') ?>
    </div>
  </header>
  <section class="mx-auto container py-10">
    <?php the_content(); ?>
  </section>
</main>
<?php
get_footer();
?>