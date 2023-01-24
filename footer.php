<footer>
  <div id="top-footer">
    <div class="container mx-auto">
      <div class="grid grid-cols-12 gap-12 place-content-center">
        <div class="column left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt="">
          <h5 class="font-bold text-xl mt-4">Miracle Skin, Hair and Aesthetic Clinic Pvt. Ltd.</h5>
          <p>
            Between KL Tower and Bhatbhateni Store, Dampa Complex, Chabahil, Kathmandu, Nepal
          </p>
        </div>
        <div class="column right">
          <div class="services">
            <div class="link-heading">Our Services:</div>
            <?php
            wp_nav_menu(array(
              'theme_location' => 'services-menu',
              'container' => false,
            ));
            ?>

          </div>
          <div class="important-link">
            <div class="link-heading">Important Links:</div>
            <?php
            wp_nav_menu(array(
              'theme_location' => 'links-menu',
              'container' => false,
            ));
            ?>
          </div>
          <div class="details">
            <div class="mb-6">
              <div class="link-heading">Opening Hours</div>
              <p>Sunday to Friday: 9am to 7pm</p>
              <p>Saturday: 11am to 5pm</p>
            </div>
            <div>
              <div class="link-heading">Follow Us</div>
              <div class="social-media-links">
                <a href="https://www.facebook.com/miracleskinhair" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.png" alt=""></a>
                <a href="https://www.instagram.com/miracleskinhair" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.png" alt=""></a>
                <a href="https://www.tiktok.com/@miracle_skinclinic" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/tiktok.png" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="bottom-footer">
    <p>Copyright © <?php echo date('Y'); ?>, Miracle Skin, Hair and Aesthetic Clinic Pvt. Ltd. All rights reserved. Terms and Conditions, Privacy Policy</php>
  </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>