<?php get_header() ?>
<main class="pt-[260px]">
  <div class="container mx-auto">
    <div class="flex">
      <div class="flex flex-col justify-center w-6/12 pr-10">
        <h6>Welcome to Miracle Skin Care</h6>
        <h1 class="font-bolder text-5xl mb-2">When they ask you how you’ll tell it’s Miracle </h1>
        <p class="mb-4">We are a multi-disciplinary aesthetic derma care clinic in Kathmandu. Get trusted treatment with advanced technology and expertise to transform your skin, hair and aesthetic health.
        </p>
        <div>
          <button class="button primary"><a href="#">Send Enquiry</a></button>
          <button class="button ghost">Learn More</button>
        </div>
      </div>
      <div class="w-6/12 h-96">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" alt="" class="w-full h-full object-cover">
      </div>
    </div>
  </div>
</main>
<section id="featured-services">
  <div class="container mx-auto">
    <div class="grid grid-cols-12 gap-6 place-content-center">
      <div class="card px-10 bg-white shadow-md py-">
        <div class="title text-2xl font-bold">Top Laser Treatment</div>
        <div class="learn-more">Learn More</div>
      </div>
      <div class="card px-10 bg-white shadow-md">
        <div class="title text-2xl font-bold">Top Laser Treatment Top Laser Treatment Top Laser Treatment</div>
        <div class="learn-more">Learn More</div>
      </div>
      <div class="card px-10 bg-white shadow-md">
        <div class="title text-2xl font-bold">Top Laser Treatment</div>
        <div class="learn-more">Learn More</div>
      </div>
    </div>
  </div>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wave.png" alt="" class="absolute top-0 left-0 -z-10 h-full w-full">
</section>
<section id="services">
  <div id="top-header">
    <div class="container mx-auto">
      <h5>Our Services</h5>
      <h2>Miracle helps you transform your skin, hair and more</h2>
      <h6>Get comprehensive aesthetic treatment plans custom designed for you</h6>
    </div>
  </div>
  <div class="services-content">
    <div class="slider">
      <?php
      for ($x = 0; $x < 5; $x++) {
      ?>
        <div class="card">
          <h2>Cosmetic Procedures</h2>
          <h6>Keep your skin free from things you don’t like.
          </h6>
          <div class="overlay"></div>
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZmlsZXxlbnwwfHwwfHw%3D&w=1000&q=80" alt="" class="absolute top-0 left-0 object-cover h-full w-full
          ">
        </div>
      <?php
      }
      ?>
    </div>
  </div>
  <div id="section-footer">
    <button class="button primary"><a href="#">View All Services</a></button>
  </div>
</section>
<div id="offers">
  <div id="top-header">
    <div class="container mx-auto">
      <h5>Current Offers</h5>
      <h2>Save money on your treatment</h2>
    </div>
  </div>
  <div class="offers-content">
    <div class="container mx-auto">
      <div class="flex flex-wrap gap-6 justify-center">
        <?php
        for ($x = 0; $x < 5; $x++) {
        ?>
          <div class="card">
            <div>
              <h1>Save 15% On</h1>
              <h2>Acne Scar Removal</h2>
              <h6>Remove acne to reveal your healthy glow of the skin.
              </h6>
            </div>
            <div>
              <div class="book-now-icon">
                <h3>Book Now</h3>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  <div id="section-footer">
    <button class="button primary"><a href="#">View All Offers</a></button>
  </div>
</div>
<div id="why">
  <div class="why-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/why.png" alt="" class="w-full h-full object-cover"></div>
  <div class="container mx-auto">
    <div class="grid grid-cols-12 gap-6 h-full place-content-center">
      <div class="col-span-4"></div>
      <div class="col-span-8 why-content">
        <div id="top-header">
          <h5>Miracle benefits</h5>
          <h2>Why choose Miracle ?</h2>
        </div>
        <div class="grid grid-cols-12 gap-8">
          <?php
          for ($x = 0; $x < 4; $x++) {
          ?>
            <div class="point">
              <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/result.svg" />
              </div>
              <h4>Modern Technology, Faster Treatments
              </h4>
              <p>We utilise what’s best in technological advances to make your treatment faster.</p>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer() ?>