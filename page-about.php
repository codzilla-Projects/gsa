<?php 

	/**

	** Template Name: About Us Template

	**/
	require_once( gsa_ROOT  . '/switching_languages/about_page_switching.php');

	get_header(); 

	$page_name_title = $about_page_title;

	require_once ( gsa_ROOT . 'template-parts/page-breadcrumb.php');

?>
<?php if ($about_first_section_hidden != '1')  : ?>

	<section class="about-2nd">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 content">
					<h2 class="title">
						<?=  $about_first_section_title ?>
					</h2>
					<p>
						<?= $about_first_section_content ?>
					</p>
				</div>
				<div class="col-lg-6 col-md-12 content image">
					<h2 class="title">
						<?=  $about_first_section_title ?>
					</h2>
					<div class="image-container">
						<img src="<?= $about_first_section_img ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

<?php endif; ?>

<?php if ($about_second_section_hidden != '1')  : ?>

	<section class="details about">
		<div class="about-second details-item">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="image-container">
							<img src="<?= $third_about_first_block_img; ?>" alt="<?= $third_about_first_block_title; ?>">
						</div>
						<h2 class="element-title"><?= $third_about_first_block_title; ?></h2>

						<p class="element-para"><?= $third_about_first_block_content; ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php endif; ?>

<?php if ($about_third_section_hidden != '1')  : ?>

	<section class="about-3rd">
		<div class="about-3rd-bg" style="background-image:url(<?= $gsa_background_pattern_img; ?>)">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 col-md-12 col-sm-12 left">
						<div class="sec-title">
							<h2>
								<?= $about_third_section_title_one ?>
							</h2>
						</div>
						<div class="image-container">
							<img src="<?= $about_third_section_img_one ?>" alt="<?= $about_third_section_title_one ?>">
						</div>
						<h3 class="title"><?= $about_third_section_subtitle_one ?></h3>
						<p class="para"><?= $about_third_section_content_one ?></p>
					</div>

					<div class="col-lg-8 col-md-12 col-sm-12 right">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="sec-title">
									<h2>
										<?= $about_third_section_title_two ?>
									</h2>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="image-container">
									<img src="<?= $about_third_section_img_two ?>" alt="<?= $about_third_section_title_two ?>">
								</div>
								<h3 class="title"><?= $about_third_section_subtitle_two ?></h3>
								<p class="para"><?= $about_third_section_content_two ?></p>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="image-container">
									<img src="<?= $about_third_section_img_third ?>" alt="<?= $about_third_section_title_third ?>">
								</div>
								<h3 class="title"><?= $about_third_section_subtitle_third ?></h3>
								<p class="para"><?= $about_third_section_content_third ?></p>
							</div>
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</section>

<?php endif; ?>

<?php if ($about_video_hidden != '1')  : ?>

	<div class="vid-back">

		<section class="video-popup" style="background-image:url(<?= $about_video_img ?>)">

			<div class="play-btn"> 
				<a data-fancybox data-width="640" data-height="360" href="<?php if (!empty($about_youtube_video)) : ?><?=$about_youtube_video ?><?php else: ?> <?=$about_video?> <?php endif; ?> " id = "vid-open">
					<img src="<?= gsa_URL.'assets/img/01video-play.png' ?>" alt="Play">
				</a>
			</div>

			<h2 class = "vid-title"><?= $about_video_sec_text; ?></h2>

		</section>

	</div>

<?php endif; ?>

<?php if ($about_vision_hidden != '1')  : ?>

<section class="vision-banner" style="background-image:url(<?=$gsa_vision_img ?>)">
	<div class="vision-bg">
		<div class="vision-content">

			<div class="row">

				<div class="col-md-8">
					<h3><?=$vision_title?></h3>
					<div class="para">
						<?=$vision_content?>
					</div>
				</div>

				<div class="col-md-4">

					<div class="vision-content-img text-end">

						<img src="<?=$gsa_vision_year_img?>">

					</div>

				</div>

			</div>

		</div>
	</div>

</section>

<?php endif; ?>

<?php if ($about_sixth_sec_hidden != '1')  : ?>

	<section class="about-contact">
		<div class="about-5rd-bg" style="background-image:url(<?= $gsa_background_pattern_img; ?>)">
			<div class="container">
				<div class="row">
					<div class="col-md-6 content">
						<div class="content">
							<h2 class="title"><?= $about_sixth_title ?></h2>
							<a href="<?= $about_sixth_btn_url ?>" class="btn thm-btn first-thm-btn"><?= $about_sixth_btn_title ?></a>
						</div>
					</div>
					<div class="col-md-6 image">
						<h2 class="title"><?= $about_sixth_title ?></h2>
						<div class="image-container">
							<img src="<?= $about_sixth_image ?>" alt="<?= $about_sixth_title ?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php endif; ?>

<?php get_footer()?>

