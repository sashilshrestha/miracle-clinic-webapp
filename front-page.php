<?php get_header() ?>
<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
?>
<main class="pt-[16.25rem] max-md:pt-48">
  <div class="container mx-auto">
    <div class="flex max-md:flex-col-reverse">
      <div class="flex flex-col justify-center w-6/12 pr-10 hero-content max-md:w-full">
        <h6><?php echo get_field('home_page_subtitle'); ?></h6>
        <h1 class="font-bolder text-6xl mb-4 tracking-tighter"><?php echo get_field('home_page_title'); ?></h1>
        <p class="mb-4"><?php echo get_field('home_page_description'); ?>
        </p>
        <div>
          <?php
          $page = get_page_by_title('contact');
          $link = get_permalink($page->ID);
          ?><a href="<?php echo $link; ?>">
            <button class="button primary mr-2">Send Enquiry</button>
          </a>
          <!-- <button class="button ghost">Learn More</button> -->
        </div>
      </div>
      <div class="w-6/12 hero-img rounded-lg hover:shadow-lg transition-all duration-300 max-md:w-full">
        <?php
        for ($x = 1; $x <= 4; $x++) {
        ?>
          <img src="<?php echo get_field('image_slider_' . $x . '') ?>" alt="" class="w-full h-full object-cover rounded-lg">
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</main>
<section id="featured-services" class="max-md:!h-full max-md:py-16 max-md:!hidden">
  <div class="container mx-auto">
    <div class="grid grid-cols-12 gap-6 place-content-center max-md:gap-3">
      <?php
      for ($x = 1; $x <= 3; $x++) {
      ?>
        <div class="card shadow-md relative max-md:!h-56">
          <div class="px-8">
            <div class="title text-3xl font-bold tracking-tight max-md:text-xl"><?php echo get_field('service_' . $x . ''); ?></div>
            <!-- <div class="learn-more">Learn More</div> -->
          </div>
          <img src="<?php echo get_field('service_image_' . $x . ''); ?>" alt="" class="absolute h-full w-full object-cover rounded-md" style="z-index: -1">
        </div>
      <?php
      }
      ?>

    </div>
  </div>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wave.png" alt="" class="absolute top-0 left-0 -z-10 h-full w-full">
</section>
<section id="services" class="max-md:pt-20">
  <div id="top-header">
    <div class="container mx-auto">
      <h5>Our Services</h5>
      <h2>Miracle helps you transform your skin, hair and more</h2>
      <h6>Get comprehensive aesthetic treatment plans custom designed for you</h6>
    </div>
  </div>
  <div class="container mx-auto">
    <div class="services-content">
      <div class="services-slider">
        <!-- Post Calling Loop Started -->
        <?php
        $args = array(
          'taxonomy'   => 'services_category',
          'hide_empty' => false,
        );

        $categories = get_terms($args);
        foreach ($categories as $category) {
          $category_link = get_category_link($category->term_id);
          $category_id = $category->term_id;

          $image = get_field('category_thumbnail', 'category_' . $category_id);

        ?>
          <!-- Loop Started -->
          <div class="card">
            <h2><a href="<?php echo esc_url($category_link) ?>"><?php echo $category->name ?></a></h2>
            <h6><?php echo $category->description ?></h6>
            <div class="overlay"></div>
            <img src="<?php echo $image; ?>" alt="" class="absolute top-0 left-0 object-cover h-full w-full
          ">
          </div>
          <!-- Loop Ended -->
        <?php
        }
        ?>
        <!-- Post Calling Loop Ends -->
      </div>
    </div>
  </div>
  <div id="section-footer" class="!mb-20">
    <!-- <button class="button primary"><a href="#">View All Services</a></button> -->
  </div>
</section>
<div id="why" class="mb-20 max-md:mb-0">
  <div class="why-img max-md:hidden"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/why.jpg" alt="" class="w-full h-full object-cover" style="object-position: 18%"></div>
  <div class="container mx-auto">
    <div class="grid grid-cols-12 gap-6 h-full place-content-center">
      <div class="col-span-4 max-md:hidden"></div>
      <div class="col-span-8 why-content max-md:col-span-12">
        <div id="top-header">
          <h5>Miracle benefits</h5>
          <h2>Why choose Miracle ?</h2>
        </div>
        <div class="grid grid-cols-12 gap-8">
          <div class="point">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/counseling.svg" />
            </div>
            <h4>Empathy-Driven Counselling
            </h4>
            <p>You experience comfort at every stage of our services driven by empathy.</p>
          </div>
          <div class="point">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/result.svg" />
            </div>
            <h4>Guaranteed Results
            </h4>
            <p>Get trusted results from expert dermatologists and practitioners with years of experience.</p>
          </div>

          <div class="point">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/technology.svg" />
            </div>
            <h4>Modern Technology, Faster Treatments
            </h4>
            <p>We utilize what’s best in technological advances to make your treatment faster.</p>
          </div>

          <div class="point">
            <div class="icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/safety.svg" />
            </div>
            <h4>Designed For Your Safety
            </h4>
            <p>Our clinical facility and procedures are designed for your safety at every stage of treatment.</p>
          </div>

        </div>
      </div>
    </div>
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
      <!-- <div class="flex justify-center flex-wrap gap-16">
        <?php
        for ($x = 0; $x < 6; $x++) {
        ?>
          <div class="person-container">
            <div class="person-circle">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mohan-bhusal.png" alt="">
            </div>
            <h1>Dr.Mohan Bhusal</h1>
            <h6>Dermato-venereologist, Laser and Hair Specialist
            </h6>
          </div>
        <?php
        }
        ?>
        <div class="person-container">
          <div class="person-circle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/elisha-bhattrai.png" alt="">
          </div>
          <h1>Dr. Elisha Bhattrai</h1>
          <h6>Dermato-venereologist, Laser and Hair Specialist
          </h6>
        </div>
      </div> -->
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team.png" alt="" class="w-full object-contain n max-md:object-cover max-md:!h-96" style="height: 38rem">
    </div>
  </div>
  <div id="section-footer">
    <a href="<?php echo get_site_url(); ?>/our-team"><button class="button primary">View All Team Member</button></a>
  </div>
</div>
<div id="testimonials" class="relative max-md:mt-20">
  <div id="top-header">
    <div class="container mx-auto">
      <h5>Testimonials</h5>
      <h2>Trusted by people who wanted transformation.</h2>
    </div>
  </div>
  <div class="container mx-auto">
    <div class="grid grid-cols-12 testimonial-container gap-6">
      <div class="testimonial-message six flex flex-col pt-36 relative max-md:p-0">
        <div class="slider-testimonial">
          <!-- Post Calling Loop Started -->
          <?php
          $args = array(
            'post_type' => 'testimonials',
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
            <div>
              <p class="text text-xl mb-2 tracking-tight">
                <?php echo wp_strip_all_tags(get_the_content()); ?>
              </p>
              <h3 class="text-2xl font-bold"><?php the_title(); ?></h3>
              <!-- <h5 class="text-lg font-normal italic">Beatician</h5> -->
            </div>
            <!-- Loop Ended -->
          <?php
          endwhile;
          wp_reset_postdata();
          ?>
          <!-- Post Calling Loop Ends -->
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quote.png" alt="" class="absolute -left-10 top-14 max-md:left-0 max-md:-top-7 max-md:h-20" style="z-index: -1">
      </div>
      <div class="testimonial-image six">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial.png" alt="" style="height: 687px" class="object-cover max-md:!h-80 max-md:w-full">
      </div>
    </div>
  </div>
  <div class="yellow-overlay bg-primary-mid-light absolute top-0 left-0 -z-10" style="width: 55%; height:68%"></div>
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
      <!-- Post Calling Loop Started -->
      <?php
      $args = array(
        'post_type' => 'results',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'publish_date',
      );
      $resultsposts = new WP_Query($args);

      while ($resultsposts->have_posts()) :
        $resultsposts->the_post();

        $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
      ?>
        <!-- Loop Started -->
        <div class="card">
          <div class="card-content">
            <h6><?php echo get_the_date() ?></h6>
            <h1>Treatment: <?php the_title() ?>
            </h1>
            <a href="<?php the_permalink() ?>" class="result-learn"><button class="button italic secondary font-bold tracking-tighter">Learn More</button></a>
          </div>
          <div class="overlay"></div>
          <img src="<?php echo $thumb_url[0] ?>" alt="" class="result-image">
        </div>
        <!-- Loop Ended -->
      <?php
      endwhile;
      wp_reset_postdata();
      ?>
      <!-- Post Calling Loop Ends -->
    </div>
  </div>
  <div id="section-footer" class="hidden">
    <a href="<?php echo get_site_url(); ?>/results-and-stories"><button class="button primary">View All Results</button></a>
  </div>
</div>
<div id="blogs">
  <div id="top-header">
    <div class="container mx-auto">
      <h5>News & Blogs</h5>
      <h2>Readings that inspire</h2>
      <h6>Browse our articles to inspire yourself on your skin, hair and aesthetic journey</h6>
    </div>
  </div>
  <div class="blog-content">
    <div class="container mx-auto">
      <div class="grid grid-cols-12 gap-6">
        <?php
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'posts_per_page' => 3,
          'order' => 'DESC',
          'orderby' => 'publish_date',
        );
        $newsposts = new WP_Query($args);

        while ($newsposts->have_posts()) :
          $newsposts->the_post();

          $thumb_id = get_post_thumbnail_id();
          $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
        ?>
          <div class="card ">
            <img src="<?php echo $thumb_url[0] ?>" alt="">
            <div class="card-content">
              <h4><?php the_title() ?></h4>
              <p>Get Insights, Information and Care Tips about Skin Hair and Aesthetic Delivered Unsubscribe at any time...</p>
              <div class="readmore">
                <a href="<?php the_permalink(); ?>">Read Full Article >></a>
                <span><?php echo get_the_date() ?></span>
              </div>
            </div>
          </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
  <div id="section-footer">
    <a href="<?php echo get_site_url(); ?>/news"><button class="button primary">View All Blogs</button></a>
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