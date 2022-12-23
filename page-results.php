<?php get_header() ?>
<header class="page--header">
  <div class="container mx-auto">
    <h1>Results</h1>
  </div>
</header>
<main id="results-page">
  <div class="container mx-auto">
    <div class="results-container grid grid-cols-12 gap-12 place-content-center">
      <?php
      for ($x = 0; $x < 7; $x++) {
      ?>
        <div class="result-card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skin.png" alt="" class="w-full h-full object-cover img-thumbnail">
          <div class="result-description">
            <div class="name">John Doe, 25</div>
            <div class="details">
              <div><span class="details-title">Concerns: </span><span class="details-treatment">Hair</span></div>
              <div><span class="details-title">Treatment: </span><span class="details-treatment">Laser Hair Removal</span></div>
            </div>
            <div class="read-more">
              <a href="">Read Testimonial >></a>
              <span>Date: 28 Oct 2022</span>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</main>
<?php get_footer() ?>