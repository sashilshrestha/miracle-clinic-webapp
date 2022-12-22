<?php get_header() ?>
<header class="page--header">
  <div class="container mx-auto">
    <h1>Results</p>
  </div>
</header>
<main id="results-page">
  <div class="container mx-auto">
    <div class="results-container grid grid-cols-12 gap-12 place-content-center">
      <?php
      for ($x = 0; $x < 7; $x++) {
      ?>
        <div class="result-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" alt="" class="w-full h-full object-cover">
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</main>
<?php get_footer() ?>