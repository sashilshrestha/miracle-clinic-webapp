<?php get_header() ?>
<header class="page--header">
  <div class="container mx-auto">
    <h1><?php single_term_title(); ?></h1>
  </div>
</header>
<main class="container mx-auto">
  <?php if (have_posts()) : ?>
    <section class="flex flex-wrap -m-4 py-20">
      <?php
      while (have_posts()) :
        the_post();
      ?>
        <?php get_template_part('template-parts/content', 'services'); ?>
      <?php endwhile; ?>
    </section>
  <?php endif; ?>
</main>
<?php get_footer() ?>