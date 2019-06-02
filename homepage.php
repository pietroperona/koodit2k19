<?php
/**
 * Template Name: Homepage
 * Template for displaying a koodit businesses single page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
	<?php get_template_part( 'global-templates/hero', 'none' ); ?>
<?php endif; ?>

<!-- Call Background Cit -->
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<!-- End of Call Background Cit -->

<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

<!-- First Parallax Section -->
<div class="container-fluid parallax-window" data-bleed="15" data-ios-fix="true" data-android-fix="true" data-speed="0.6" data-parallax="scroll" data-image-src="https://www.f8.com/static/images/landing/image1.jpg">
</div>
<!-- End of First Parallax Section -->

<div class="wrapper"  style="background:#2C2C2C;">
  <div class="container">
      <div class="row homebox">
          <div class="col-sm-12">
          <p style="color: #fff; align:left;">Facebook Developer Conference</p>
          </div>
          <div class="col-sm-6">
            <h1>Expand<br>possibilities.</h1>
            <div class="d-lg-none" style="padding-bottom:25px;"></div>
          </div>
          <div class="col-sm-6">
            <div>
              <p>2019 marks Facebook's 10th F8. What started as an 8-hour hackathon has evolved into a 2-day event for developers, creators, entrepreneurs and innovators from around the world.</p>
              <p>There will be networking opportunities, deep-dive sessions and product demos that showcase the latest in AI, open source, AR/VR, developer programs as well as new tools across Facebook’s family of apps to help build products and grow businesses.</p>
              <p>F8 2019 will celebrate our global developer community and highlight how technology can enable the best of what people can do together</p>
            </div>
          </div>
      </div>
  </div>
</div> 

<!-- First Parallax Section -->
<div class="container-fluid parallax-window" data-bleed="15" data-ios-fix="true" data-android-fix="true" data-speed="0.6" data-parallax="scroll" data-image-src="https://www.f8.com/static/images/landing/image1.jpg">
</div>
<!-- End of First Parallax Section -->


<div class="container-fluid">
  <div class="row" id="test-ale" style="background-color: #f0f0f0 ;">

    <div class="col-md-6 no-gutter">
      <h2 class="p1">
      Content column
      </h2>
      <p>2019 marks Facebook's 10th F8. What started as an 8-hour hackathon has evolved into a 2-day event for developers, creators, entrepreneurs and innovators from around the world.</p>
    </div>

    <div class="col-md-6 no-gutter" style="background-color: red;">
      <img id="test-ale" src="https://source.unsplash.com/ieic5Tq8YMk/1600x900">
    </div>

  </div>
</div>
<?php get_footer(); ?>

