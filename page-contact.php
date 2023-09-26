<?php
/**
** Template Name: Contact Us Template
**/
	require_once( gsa_ROOT  . '/switching_languages/contact_page_switching.php');
	get_header(); 

?>
<?php 
		$page_image         = get_the_post_thumbnail_url();
        $page_image_title   = $gsa_main_img; 
        $page_name_title    = $contact_page_title;
        $page_mobile_img    =  get_post_meta( get_the_ID(), 'page_mobile_featured_img', true );
?>
<section class="banner-section banner-contact breadcrumb">
	<img class="banner-img" src="<?php  if(empty($page_image)){ echo $page_image_title;}elseif (is_tax()){echo $page_image_title;} elseif (wp_is_mobile()){echo $page_mobile_img;} else{ echo $page_image;}?>">
	<div class="container z-9">
		<div class="banner_content d-flex">
			<div class="row">
				<div class="col-md-12 d-flex justify-content-end">
					<div class="contact-details">

					<h3 class="banner_title"><?=$page_name_title ?></h3>
					<?php if (!empty($contact_page_sub_title)): ?>
					<h4><?= $contact_page_sub_title; ?></h4>
					<?php endif ?>
					<p>
						<?= $contact_page_content; ?>
					</p>
					<a href="<?= $contact_page_btn_url; ?>" class="thm-btn second-thm-btn"><?= $contact_page_btn_text; ?></a>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="contact-form" class="contact-form sec-padding" >
	<div class="bg" style="background-image:url(<?= $gsa_background_pattern_img; ?>)">
		<div class="container">
			<div class="headline-title text-center">
				<h3><?= $contact_first_section_title; ?></h3>
			</div>
			<div class="default-form">
					<?= do_shortcode($contacts_shortcode); ?>
			</div>
		</div>
	</div>
</section>

<section class="social-media sec-padding">
	<div class="container">
		<div class="row">
			<?php $gsa_phone = get_option('gsa_phone'); $gsa_second_phone = get_option('gsa_second_phone')?>
			<?php if (!empty($gsa_phone) && !empty($gsa_second_phone)): ?>
			<div class="col-md-4">
				<div class="social-block">
					<div class="social-img">
						<img src="<?=gsa_URL?>assets/img/call.webp">
					</div>
					<div class="social-phone">
						<a href="tel:+<?= $gsa_phone; ?>">+<?= $gsa_phone; ?></a>
						<a href="tel:+<?= $gsa_second_phone; ?>">+<?= $gsa_second_phone; ?></a>
					</div>
				</div>
			</div>
			<?php endif ?>
			<?php $gsa_email = get_option('gsa_email')?>
			<?php if (!empty($gsa_email)): ?>
			<div class="col-md-4">
				<div class="social-block">
					<img src="<?=gsa_URL?>assets/img/envlope.webp">
					<a href="mailto:<?= $gsa_email; ?>"><?= $gsa_email; ?></a>
				</div>
			</div>
			<?php endif ?>
			<?php $gsa_location = get_option('gsa_location')?>
			<?php if (!empty($gsa_location)): ?>
			<div class="col-md-4">
				<div class="social-block">
					<img src="<?=gsa_URL?>assets/img/location.webp">
					<a href="javascript:void(0)"><?= $gsa_location; ?></a>
				</div>
			</div>
			<?php endif ?>
		</div>
	</div>
</section>

<?php get_footer()?>