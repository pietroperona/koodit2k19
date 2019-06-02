<?php
/**
 * Template Name: Single Businesses Page
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

<!-- Businesses Top Description Block -->
<div class="wrapper topar-businesses" id="full-width-page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12 content-area">
			<h1><?php wp_title(''); ?></h1>
			<p class="topp-businesses"><?php echo get_post_meta($post->ID, 'business', true)?></p>
			</div>
		</div>
	</div>
</div>
<!-- End of Businesses Top Description Block -->

<!-- Call Background Cit -->
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<!-- End of Call Background Cit -->


<!-- Cit Block -->
<div class="wrapper" id="full-width-page-wrapper" style="background: linear-gradient(0deg,rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; max-height: 480px;">
  <div class="container">
      <div class="row">
        <div class="col-md-12" id="content">
          <div class="blockquote">
            <p class="p-cit-style">
              <?php echo get_post_meta($post->ID, 'cit', true)?>
            </p>
          </div>
        </div>
      </div>
  </div>
</div>
<!-- End of Cit Block -->

<!-- Businesses Description Block MAX-4 -->
<div class="container actcont-businesses">
  <div class="row actrow-businesses">
      <div class="col-sm-6 first-column">
    <h3 class="actt-businesses"><?php echo get_post_meta($post->ID, 'titolo-attività1', true)?></h3>
      <p class="actdesc-businesses"><?php echo get_post_meta($post->ID, 'attività1', true)?></p>
      </div>
      <div class="col-sm-6 second-column">
    <h3 class="actt-businesses"><?php echo get_post_meta($post->ID, 'titolo-attività2', true)?></h3>
      <p class="actdesc-businesses"><?php echo get_post_meta($post->ID, 'attività2', true)?></p>
      </div> 
    </div>
    <div class="row actrow-businesses">
      <div class="col-sm-6 first-column">
    <h3 class="actt-businesses"><?php echo get_post_meta($post->ID, 'titolo-attività3', true)?></h3>
      <p class="actdesc-businesses"><?php echo get_post_meta($post->ID, 'attività3', true)?></p>
      </div>
      <div class="col-sm-6 second-column">
    <h3 class="actt-businesses"><?php echo get_post_meta($post->ID, 'titolo-attività4', true)?></h3>
      <p class="actdesc-businesses"><?php echo get_post_meta($post->ID, 'attività4', true)?></p>
      </div> 
  </div>
</div>
<!-- End of Businesses Description Block  -->

  <!-- Businesses FAQ -->
  <div class="container faqbox-businesses">
    <div class="faq-content">
      <div class="faq-question">
        <input id="q1" type="checkbox" class="panel">
        <div class="plus">+</div>
        <label for="q1" class="panel-title">Di cosa si tratta?</label>
        <div class="panel-content">
      <?php echo get_post_meta($post->ID, 'dicosasitratta', true)?>
    </div>
      </div>
      
      <div class="faq-question">
        <input id="q2" type="checkbox" class="panel">
        <div class="plus">+</div>
        <label for="q2" class="panel-title">Qual è il nostro approccio?</label>
        <div class="panel-content">	<?php echo get_post_meta($post->ID, 'approccio', true)?>
    </div>
      </div>

      <div class="faq-question">
        <input id="q3" type="checkbox" class="panel">
        <div class="plus">+</div>
        <label for="q3" class="panel-title">Qual è l'obbiettivo del servizio?</label>
        <div class="panel-content">	<?php echo get_post_meta($post->ID, 'obbiettivo', true)?>
    </div>
      </div>
    </div>
  </div>
  <!-- End of Businesses FAQ -->

<!-- Call Background Cit -->
<?php $backgroundrel1 = wp_get_attachment_image_src( get_post_meta($post->ID), 'rel1-image' );?>
<!-- End of Call Background Cit -->  

  <!-- Related Businesses Block MAX-2 -->
<!-- <div class="container-fluid">
  <div class="row">
    <div class="col-sm-6 first-column" style="background: linear-gradient(0deg,rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url('<?php echo $backgroundrel1[0]; ?>') no-repeat; background-size: cover; max-height: 480px;"> 
      <div class="justify-content-center related-businessin"> 
      <h3><?php echo get_post_meta($post->ID, 'titolo-attività1', true)?></h3>
        <p><?php echo get_post_meta($post->ID, 'attività1', true)?></p>
      </div>
    </div>
    <div class="col-sm-6 second-column" style="background: linear-gradient(0deg,rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; max-height: 480px;">
      <div class="related-businessin">
      <h3><?php echo get_post_meta($post->ID, 'titolo-attività2', true)?></h3>
      <p><?php echo get_post_meta($post->ID, 'attività2', true)?></p>
      </div>
    </div> 
  </div>
</div> -->
<!-- End of Related Businesses Block  -->
<div class="container-fluid">
    <?php wpb_related_pages(); ?>
</div>
<?php get_footer(); ?>

