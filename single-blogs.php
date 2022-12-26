<?php get_header() ?>
<main id="blogs-inner">
  <header class="page--header">
    <div class="container mx-auto">
      <h1>
        Pokemon Sword and Shield Are Holding a New Gigantamax Pokemon Event
      </h1>
      <p>February 25, 2022</p>
    </div>
  </header>
  <section>
    <div class="container mx-auto">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" alt="" class="main-image">
      <div class="content grid grid-cols-12 gap-12 pt-6">
        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6 2xl:col-span-8">
          <p>
            1C Entertainment, the Polish studio behind games like King’s Bounty, today announced it has been acquired by Tencent. Tencent will hold the majority stake in the company, and it plans to rebrand the studios within six months.
          </p>
          <p>
            Tencent will acquire the stakes formerly held by parent company 1C. According to the terms of the deal, 1C Entertainment and any of its subsidiaries with the 1C branding will renamed. We don’t yet know what the new names will be.
          </p>
          <p>
            Tomasz Nieszporski, 1C Entertainment management board member, said in a statement, “We are truly excited by this deal. It is an amazing opportunity for 1CE to achieve our wildest dreams and aspirations in the video games business. Our vision and passion will be now backed by a leading global games company, and I am humbled by the unique chance of working together with Tencent and the other top creative minds that are part of its global ecosystem.”
          </p>
          <p>
            Li Shen, Tencent Games Global’s CTO, added, “We couldn’t be more pleased to work with the talented team at 1C Entertainment, supporting them as they embark on a new phase of growth.”
          </p>

          Tomasz Nieszporski, 1C Entertainment management board member, said in a statement, “We are truly excited by this deal. It is an amazing opportunity for 1CE to achieve our wildest dreams and aspirations in the video games business. Our vision and passion will be now backed by a leading global games company, and I am humbled by the unique chance of working together with Tencent and the other top creative minds that are part of its global ecosystem.”

        </div>
        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6 2xl:col-span-4">
          <aside>
            <div class="share-post">
              <span class="font-bold mr-2 text-xl">Share on:</span>
              <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt=""></a>
              <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png" alt=""></a>
            </div>
            <div class="other-posts">
              <?php
              for ($x = 0; $x < 4; $x++) {
              ?>
                <div class="post-card">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/skin.png" alt="" class="rounded-md mr-4">
                  <div class="post-description">
                    <h5>Yarsa Games: A Nepali Mobile Gaming App that Crossed 100 M+ Downloads</h5>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>