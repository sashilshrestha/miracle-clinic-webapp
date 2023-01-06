<?php get_header() ?>
<header class="page--header">
  <div class="container mx-auto">
    <h1>About Us</p>
  </div>
</header>
<main id="about-page">
  <section class="intro">
    <div class="container mx-auto relative">
      <div class="py-40">
        <h1>For trusted derma care</h1>
        <p>Our mission is to provide quality derma care and aesthetic services to our clients using the latest technology.
        </p>
      </div>
      <div class="w-6/12 hero-img absolute right-0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" alt="" class="w-full h-full object-cover">
      </div>
    </div>
  </section>
  <section class="who">
    <div class="container mx-auto">
      <h1>Who are we?</h1>
      <p>We are a multi-disciplinary aesthetic derma care clinic in Kathmandu. We deal with clinical solutions for skin, hair, aesthetics, and STDs. Our expert doctors and practitioners provide treatment with advanced technology and expertise to transform the skin, hair and aesthetic health of our customers.
      </p>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/texture.png" alt="" class="img-overlay">
  </section>
  <section id="why">
    <div class="mx-auto container">
      <div class="py-32">
        <h3 class="text-secondary text-3xl text-center">But, Why Us ?</h3>
        <h2 class="text-primary-dark text-4xl font-bold text-center mb-16">It’s a bit about us, and more about you</h2>
        <div class="grid grid-cols-2 gap-40 mb-28 relative">
          <div class="px-6 py-6 flex flex-col justify-center rounded-md bg-primary-light hover:scale-105 ss-cards border-yellow-400 border">
            <h4 class="text-3xl font-bold text-hdtext mb-2">Our Values</h4>
            <p class="text-base text-text">Our values guide how we operate as a team and provide customer service.</p>
          </div>
          <div class="px-6 py-6 flex flex-col justify-center rounded-md bg-primary-light hover:scale-105 ss-cards border-yellow-400 border">
            <h4 class="text-3xl font-bold text-hdtext mb-2 text-right">People First</h4>
            <p class="text-base text-text text-right">Weather it’s our customers or our team, our utmost priority is people over everything else.</p>
          </div>
          <div class="absolute left-1/2 -translate-x-1/2 top-2/3 w-64 h-64" style="z-index: 1;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" alt="" class="object-cover h-full max-w-fit relative w-full -top-4" style="border: 1.5rem solid white; border-radius: 999px">
          </div>
        </div>
        <div class="grid grid-cols-2 gap-20">
          <div class="flex justify-end">
            <div class="px-6 py-6 flex flex-col justify-center rounded-md bg-primary-light hover:scale-105 w-[480px] ss-cards border-yellow-400 border">
              <h4 class="text-3xl font-bold text-hdtext mb-2">Empathy
              </h4>
              <p class="text-base text-text">We encourage empathy alongside more human-to-human communication for a stronger team and happier customers.
              </p>
            </div>
          </div>
          <div class="flex">
            <div class="px-6 py-6 flex flex-col justify-center rounded-md bg-primary-light hover:scale-105 w-[480px] ss-cards border-yellow-400 border">
              <h4 class="text-3xl font-bold text-hdtext mb-2 text-right">Quality</h4>
              <p class="text-base text-text text-right">We strive to be the best at our craft and knowledge to provide the best quality service to our customers.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>