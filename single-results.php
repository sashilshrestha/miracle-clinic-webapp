<?php get_header() ?>
<?php
$arrId = [get_the_ID()];
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
?>
<header class="page--header">
  <div class="container mx-auto">
  </div>
</header>
<main id="results-page-inner">
  <div class="container mx-auto">
    <div class="header-results grid grid-cols-12 gap-12 -top-20 relative">
      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6 2xl:col-span-6 pt-32">
        <h1 class="text-4xl font-bold mb-4"><?php the_title() ?></h1>
        <div class="details text-2xl">
          <div><span class="details-title font-bold">Concerns: </span><span class="details-treatment"><?php echo get_field('concerns') ?></span></div>
          <div><span class="details-title font-bold">Treatment: </span><span class="details-treatment"><?php echo get_field('treatment') ?></span></div>
          <!-- <div><span class="details-title font-bold">Duration: </span><span class="details-treatment">8 Weeks</span></div> -->
        </div>
      </div>
      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6 2xl:col-span-6">
        <img src="<?php echo $thumb_url[0]; ?>" alt="" class="w-full h-full object-cover img-thumbnail rounded-md">
      </div>
    </div>
    <div class="results-message relative">

      <svg class="absolute -top-20 left-20 -z-10" width="128" height="95" viewBox="0 0 128 95" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M29.0925 37.8858C27.6695 37.8858 26.304 38.1015 24.9448 38.2983C25.3851 36.826 25.8381 35.3283 26.5656 33.983C27.293 32.0284 28.4288 30.334 29.5583 28.6269C30.5027 26.7802 32.1681 25.5301 33.3933 23.9499C34.6758 22.4142 36.4242 21.3924 37.8089 20.1169C39.1681 18.7842 40.9484 18.1179 42.365 17.1787C43.8453 16.3347 45.1343 15.4018 46.5126 14.9576L49.952 13.5488L52.9766 12.2986L49.8818 0L46.0723 0.913825C44.8535 1.21843 43.3668 1.57381 41.6758 1.999C39.9466 2.3163 38.1024 3.1857 36.0478 3.97896C34.0186 4.88009 31.6704 5.48931 29.4881 6.9362C27.293 8.31964 24.7598 9.47461 22.5264 11.3277C20.3632 13.2378 17.7534 14.8941 15.8263 17.3246C13.7206 19.5965 11.6404 21.9826 10.026 24.6987C8.15638 27.2879 6.88656 30.1309 5.54655 32.9422C4.33415 35.7535 3.35786 38.6283 2.56023 41.4205C1.04794 47.0177 0.371549 52.3357 0.109927 56.8858C-0.107027 61.4422 0.0205931 65.2308 0.288595 67.9723C0.38431 69.2669 0.562979 70.5234 0.690599 71.3928L0.850124 72.4589L1.01603 72.4208C2.15096 77.6933 4.76362 82.5385 8.55177 86.3959C12.3399 90.2534 17.1488 92.9654 22.422 94.2183C27.6953 95.4712 33.2174 95.2138 38.3497 93.4759C43.482 91.7379 48.0147 88.5905 51.4235 84.3976C54.8322 80.2047 56.9778 75.1377 57.6118 69.7828C58.2459 64.4278 57.3427 59.0038 55.0066 54.1381C52.6705 49.2724 48.997 45.1638 44.411 42.2877C39.8251 39.4116 34.5141 37.8854 29.0925 37.8858ZM99.2835 37.8858C97.8606 37.8858 96.495 38.1015 95.1359 38.2983C95.5762 36.826 96.0292 35.3283 96.7567 33.983C97.4841 32.0284 98.6199 30.334 99.7493 28.6269C100.694 26.7802 102.359 25.5301 103.584 23.9499C104.867 22.4142 106.615 21.3924 108 20.1169C109.359 18.7842 111.139 18.1179 112.556 17.1787C114.036 16.3347 115.325 15.4018 116.704 14.9576L120.143 13.5488L123.168 12.2986L120.073 0L116.263 0.913825C115.045 1.21843 113.558 1.57381 111.867 1.999C110.138 2.3163 108.294 3.1857 106.239 3.97896C104.216 4.88644 101.861 5.48931 99.6792 6.94255C97.4841 8.32598 94.9508 9.48096 92.7175 11.334C90.5543 13.2442 87.9445 14.9005 86.0174 17.3246C83.9117 19.5965 81.8315 21.9826 80.2171 24.6987C78.3475 27.2879 77.0776 30.1309 75.7376 32.9422C74.5252 35.7535 73.5489 38.6283 72.7513 41.4205C71.239 47.0177 70.5626 52.3357 70.301 56.8858C70.084 61.4422 70.2117 65.2308 70.4797 67.9723C70.5754 69.2669 70.7541 70.5234 70.8817 71.3928L71.0412 72.4589L71.2071 72.4208C72.342 77.6933 74.9547 82.5385 78.7428 86.3959C82.531 90.2534 87.3398 92.9654 92.6131 94.2183C97.8863 95.4712 103.409 95.2138 108.541 93.4759C113.673 91.7379 118.206 88.5905 121.615 84.3976C125.023 80.2047 127.169 75.1377 127.803 69.7828C128.437 64.4278 127.534 59.0038 125.198 54.1381C122.862 49.2724 119.188 45.1638 114.602 42.2877C110.016 39.4116 104.705 37.8854 99.2835 37.8858Z" fill="#EFEFEF" />
      </svg>

      <p class="text-2xl mb-40 mx-40"><?php echo wp_strip_all_tags(get_the_content()); ?></p>
    </div>
  </div>
</main>
<div id="blogs">
  <h1 class="text-center text-3xl mb-14">View other success stories</h1>
  <div class="blog-content">
    <div class="container mx-auto">
      <div class="grid grid-cols-12 gap-6">
        <?php
        $args = array(
          'post_type' => 'results',
          'post_status' => 'publish',
          'posts_per_page' => 3,
          'order' => 'DESC',
          'orderby' => 'publish_date',
          'post__not_in' => $arrId,
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
              <h4 class="text-primary underline underline-offset-4"><?php the_title() ?></h4>
              <div class="details text-lg mb-8">
                <div><span class="details-title font-bold">Concerns: </span><span class="details-treatment"><?php echo get_field('concerns') ?></span></div>
                <div><span class="details-title font-bold">Treatment: </span><span class="details-treatment"><?php echo get_field('treatment') ?></span></div>
                <!-- <div><span class="details-title font-bold">Duration: </span><span class="details-treatment">8 Weeks</span></div> -->
              </div>
              <div class="readmore">
                <a href="<?php the_permalink(); ?>">Read Full Story >></a>
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
  </div>
</div>
<?php get_footer() ?>