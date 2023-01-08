<?php

/**
 * Template Name: Contact Page
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<header class="page--header">
  <div class="container mx-auto">
    <h1>Contact Us</h1>
    <p>Take the first step towards your transformation</p>
  </div>
</header>
<main id="contact-page">
  <div class="container mx-auto">
    <div class="content grid grid-cols-12">
      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6 2xl:col-span-5 contact-left">
        <div class="detail">
          <h5>Contact Us</h5>
          <p>Take the first step towards your transformation
            You can Email us for specific inquiries or Call or text us by phone for any inquiries. You can also send a Call-Back Request. We will get to you soon.</p>
        </div>
        <div class="detail">
          <h5>Enquiries</h5>
          <p>Telephone Call: +977 01-5919826</p>
          <p>Cellphone Call/Text: +977 9817125774</p>
          <p>Email: miracleskinhair@gmail.com</p>
        </div>
        <div class="detail">
          <h5>Opening Hours</h5>
          <p>Sunday to Friday: 9am to 7pm</p>
          <p>Saturday: 11am to 5pm</p>
        </div>
      </div>
      <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 xl:col-span-6 2xl:col-span-7 contact-right">
        <div class="px-10 py-6">
          <?php echo do_shortcode('[wpforms id="247" title="false"]'); ?>
        </div>
      </div>
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
</main>
<?php
get_footer();
