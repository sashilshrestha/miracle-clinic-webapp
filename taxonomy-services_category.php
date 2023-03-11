<?php get_header() ?>
<?php
$terms = get_the_terms(get_the_ID(), 'services_category');
foreach ($terms as $term) {
  $category_id = $term->term_id;
  $image = get_field('category_thumbnail', 'category_' . $category_id);
}
?>
<header class="page--header relative !pb-40 !pt-52">
  <div class="container mx-auto">
    <img src="<?php echo $image; ?>" alt="" class="absolute top-0 left-0 w-full h-full object-cover  opacity-20">
    <h1 style="z-index: 8"><?php single_term_title(); ?></h1>
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