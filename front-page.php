<?php get_header() ?>
<main class="pt-[260px]">
  <div class="container mx-auto">
    <div class="flex">
      <div class="flex flex-col justify-center w-6/12 pr-10 hero-content">
        <h6>Welcome to Miracle Skin Care</h6>
        <h1 class="font-bolder text-6xl mb-2 tracking-tighter">When they ask you how you’ll tell it’s Miracle </h1>
        <p class="mb-4">We are a multi-disciplinary aesthetic derma care clinic in Kathmandu. Get trusted treatment with advanced technology and expertise to transform your skin, hair and aesthetic health.
        </p>
        <div>
          <button class="button primary"><a href="#">Send Enquiry</a></button>
          <button class="button ghost">Learn More</button>
        </div>
      </div>
      <div class="w-6/12 hero-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" alt="" class="w-full h-full object-cover">
      </div>
    </div>
  </div>
</main>
<section id="featured-services">
  <div class="container mx-auto">
    <div class="grid grid-cols-12 gap-6 place-content-center">
      <div class="card px-10 bg-white shadow-md py-">
        <div class="title text-2xl font-bold tracking-tight">Top Laser Treatment</div>
        <div class="learn-more">Learn More</div>
      </div>
      <div class="card px-10 bg-white shadow-md">
        <div class="title text-2xl font-bold tracking-tight">Top Laser Treatment</div>
        <div class="learn-more">Learn More</div>
      </div>
      <div class="card px-10 bg-white shadow-md">
        <div class="title text-2xl font-bold tracking-tight">Top Laser Treatment</div>
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
    <div class="services-slider">
      <?php
      for ($x = 0; $x < 7; $x++) {
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
<div id="stories">
  <div id="top-header">
    <div class="container mx-auto">
      <h5>Success Stories</h5>
      <h2>Results that transform you</h2>
      <h6>Transformations that last forever</h6>
    </div>
  </div>
  <div class="stories-content">
    <div class="stories-slider">
      <?php
      for ($x = 0; $x < 3; $x++) {
      ?>
        <div class="card">
          <div class="card-content">
            <h6>Date: 28 Oct 2022</h6>
            <h1>Treatment: Laser Hair Removal Treatment
            </h1>
            <button class="button italic secondary font-bold tracking-tighter">Learn More</button>
          </div>
          <div class="overlay"></div>
          <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
        </div>
      <?php
      }
      ?>
    </div>
  </div>
  <div id="section-footer">
    <button class="button primary"><a href="#">View All Services</a></button>
  </div>
</div>
<div id="team">
  <div id="top-header">
    <div class="container mx-auto">
      <h5>Meet Our Team</h5>
      <h2>Experts with empathy, Ready to help you</h2>
      <h6>Our expert doctors and practitioners serve you with the highest quality derma care.</h6>
    </div>
  </div>
  <div class="team-content">
    <div class="container mx-auto">
      <div class="flex justify-center flex-wrap gap-16">
        <?php
        for ($x = 0; $x < 7; $x++) {
        ?>
          <div class="person-container">
            <div class="person-circle">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile-pic.png" alt="">
            </div>
            <h1>Dr.Mohan Bhusal</h1>
            <h6>Dermato-venereologist, Laser and Hair Specialist
            </h6>

          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  <div id="section-footer">
    <button class="button primary"><a href="#">View All Services</a></button>
  </div>
</div>
<div id="blogs">
  <div id="top-header">
    <div class="container mx-auto">
      <h5>Our Blogs</h5>
      <h2>Readings that inspire</h2>
      <h6>Browse our articles to inspire yourself on your skin, hair and aesthetic journey</h6>
    </div>
  </div>
  <div class="blog-content">
    <div class="container mx-auto">
      <div class="grid grid-cols-12 gap-6">
        <?php
        for ($x = 0; $x < 3; $x++) {
        ?>
          <div class="card ">
            <img src="https://media.istockphoto.com/id/1182641010/photo/i-love-working-from-home.jpg?b=1&s=170667a&w=0&k=20&c=2Detuk6nIrbeZWmEKiGCIM7nvoGd04VWTXtmxQYYmp4=" alt="">
            <div class="card-content">
              <h4>5 Habits That Slowly Damage Your Skin</h4>
              <p>Get Insights, Information and Care Tips about Skin Hair and Aesthetic Delivered Unsubscribe at any time...</p>
              <div class="readmore">
                <a href="">Read Full Article >></a>
                <span>Mar 10, 2022</span>
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
    <button class="button primary"><a href="#">View All Blogs</a></button>
  </div>
</div>
<div id="map">
  <div id="top-header">
    <div class="container mx-auto">
      <h2>Map Find Us</h2>
    </div>
  </div>
  <div class="map-content">
    <div class="overlay"></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.936162419961!2d85.34951711539824!3d27.719257231574602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1997bfa8f5a1%3A0x109668485a4871e!2sMiracle%20Skin%20Hair%20%26%20Aesthetic%20Clinic!5e0!3m2!1sen!2snp!4v1669397703097!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
<div id="queries">
  <h1>Got any questions or want to book an appointment ?</h1>
  <button class="button primary"><a href="#">Send Enquiry Now</a></button>
</div>
<?php get_footer() ?>