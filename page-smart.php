<?php

/**
** Template Name: Smart Cities Template
**/
    require_once( gsa_ROOT  . '/switching_languages/smart_page_switching.php');
    get_header(); 

    $page_name_title = $smart_page_title;

    require_once ( gsa_ROOT . 'template-parts/page-breadcrumb.php');
?>
<?php 
    if ($slider_hidden != '1')  :
    $no = $slider_number;
    $slides = gsa_get_slider_smart($no);
    if($slides->have_posts()) :
?>
<section class="banner-section-four">
    <!-- If we need navigation buttons -->
    <div class="banner-section-four__nav">
        <div class="swiper-button-prev" id="banner-section-four__swiper-button-next"><img src="<?=gsa_URL?>assets/img/smart-arrows.png">
        </div>
        <div class="swiper-button-next" id="banner-section-four__swiper-button-prev"><img src="<?=gsa_URL?>assets/img/smart-arrows-left.png"></div>
    </div><!-- /.banner-section-four__nav -->
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1,"loop": true,"effect": "fade","autoplay": {"delay": 5000},"navigation": {"nextEl": "#banner-section-four__swiper-button-next","prevEl": "#banner-section-four__swiper-button-prev"}}'>
        <div class="swiper-wrapper">
            <?php while($slides->have_posts()) : $slides->the_post();?>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(<?= get_the_post_thumbnail_url( get_the_ID() ) ?>);">
                </div>
                <div class="auto-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-7">
                            <div class="swiper-content">
                                <h2><?php the_title()?></h2>
                                <p><?php the_content()?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_query();?>
        </div>
    </div>
</section>
<?php endif;endif; ?>
<?php 

if ($smart_hidden != '1')  :

    $second = 0;

    $no = $smart_number;

    $programs = gsa_get_program_smart(4);

    if($programs->have_posts()) : 
?>
<section class="programs sec-padding">
    <div class="bg" style="background-image:url(<?= $gsa_background_pattern_img; ?>)">    
        <div class="container">
            <div class="headline-title">
                <h2><?= $smart_first_section_title; ?></h2>
            </div>
            <div class="programs-carousel owl-theme owl-carousel">
                <?php while($programs->have_posts()) : $programs->the_post();?>
                <div class="wow fadeInUp" data-wow-delay="<?=$second?>ms" data-wow-duration="1500ms">
                    <div class="programs-blocks">
                        <div class="program-item">
                            <div class="program-item-img">
                                <?php if (!empty(get_the_content())): ?>
                                <img style="height: 65%; display: block;" src="<?php the_post_thumbnail_url()?>">
                                <?php else: ?>
                                <img style="height: 85%; display: block;" src="<?php the_post_thumbnail_url()?>">
                                <?php endif ?>
                            </div>
                            <div class="program-item-content">
                                <h3><?php the_title()?></h3>
                                <?php if (!empty(get_the_content())): ?>
                                <p>
                                    <?=wp_trim_words( get_the_content() ,15, ' ...' )?>
                                </p>
                                <?php endif ?>
                            </div>
                        </div>
                       <a href="<?php the_permalink()?>" class="thm-btn first-thm-btn  d-block mt-3 text-center"><?php _e('Learn More','gsa'); ?></a>
                    </div>
                </div>
                <?php $second = $second + 300; endwhile; wp_reset_query();?>
            </div>
        </div>
    </div>
</section>
<?php endif; endif?>

<section class="about-3rd">
	<div class="about-3rd-bg" style="background-image:url(<?= $gsa_background_pattern_img; ?>)">
		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-12 col-sm-12 left">
					<div class="sec-title">
						<h2><?= $second_smart_first_block_title; ?></h2>
					</div>
					<div class="image-container">
						<img src="<?= $second_smart_first_block_img; ?>" alt="Partner University">
					</div>
					<h3 class="title"><?= $second_smart_first_block_sub_title; ?></h3>
					<p class="para">
						<?= $second_smart_first_block_content; ?>
					</p>
				</div>

				<div class="col-lg-8 col-md-12 col-sm-12 right">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="sec-title">
								<h2>
									<?= $second_smart_second_block_title ?>
								</h2>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="image-container">
								<img src="<?= $second_smart_second_block_img; ?>" alt="Partner University">
							</div>
							<h3 class="title"><?= $second_smart_second_block_sub_title; ?></h3>
							<p class="para">
								<?= $second_smart_second_block_content; ?>
							</p>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="image-container">
								<img src="<?= $second_smart_third_block_img; ?>" alt="Partner University">
							</div>
							<h3 class="title"><?= $second_smart_third_block_sub_title; ?></h3>
							<p class="para">
								<?= $second_smart_third_block_content; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="details details-banner padding-50">
    <div class="container headline" style="background-image:url(<?= $gsa_background_pattern_img; ?>)">
        <div class="headline-title">
            <h2><?= $smart_third_section_title; ?></h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="image-container">
                    <img src="<?= $third_smart_first_block_img;?>" alt="Lorem ipsum">
                </div>
                <h2 class="element-title"><?= $third_smart_first_block_title;?></h2>
                <p class="element-para">
                    <?=$third_smart_first_block_content;?>
                </p>
            </div>

            <div class="col-md-4">
                <div class="image-container">
                    <img src="<?= $third_smart_second_block_img;?>" alt="Lorem ipsum">
                </div>
                <h2 class="element-title"><?= $third_smart_second_block_title;?></h2>
                <p class="element-para">
                    <?=$third_smart_second_block_content;?>
                </p>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="<?= $third_smart_third_block_img;?>" alt="Lorem ipsum">
                </div>
                <h2 class="element-title"><?= $third_smart_third_block_title;?></h2>
                <p class="element-para">
                    <?=$third_smart_third_block_content;?>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="details details-banner padding-50">
    <div class="container headline" style="background-image:url(<?= $gsa_background_pattern_img; ?>)">
        <div class="headline-title">
            <h2><?= $smart_fourth_section_title; ?></h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="image-container">
                    <img src="<?= $fourth_smart_first_block_img;?>" alt="Lorem ipsum">
                </div>
                <h2 class="element-title"><?= $fourth_smart_first_block_title;?></h2>
                <p class="element-para">
                    <?=$fourth_smart_first_block_content;?>
                </p>
            </div>

            <div class="col-md-4">
                <div class="image-container">
                    <img src="<?= $fourth_smart_second_block_img;?>" alt="Lorem ipsum">
                </div>
                <h2 class="element-title"><?= $fourth_smart_second_block_title;?></h2>
                <p class="element-para">
                    <?=$fourth_smart_second_block_content;?>
                </p>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="<?= $fourth_smart_third_block_img;?>" alt="Lorem ipsum">
                </div>
                <h2 class="element-title"><?= $fourth_smart_third_block_title;?></h2>
                <p class="element-para">
                    <?=$fourth_smart_third_block_content;?>
                </p>
            </div>
        </div>
    </div>
</section>
<?php if ($ninth_hidden != '1'): ?>

<section class="become-student" style="background-image:url( <?php if (wp_is_mobile()): ?><?= $programs_sixth_mobile_img ?><?php else: ?><?= $programs_sixth_img; ?><?php endif; ?>)">
    <div class="content">
        <h2 class="headline"><?= $programs_sixth_title; ?></h2>
		<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn thm-btn first-thm-btn"><?= $programs_sixth_btn_title; ?></a>
    </div>
</section>

<?php endif; ?>



<?php if($tenth_hidden != '1' ): ?>

<section class="become-partner">
    <div class="partners" style="background-image:url(<?= $gsa_background_pattern_img; ?>)">
        <div class="container text-center">
            <img src = "<?= $programs_seventh_img;?>" alt = "<?= $gsa_home_tenth_headline ?>">
            <h2 class = "headline"><?= $programs_seventh_title; ?></h2>
            <a href = "<?= $programs_seventh_btn_url; ?>" class = "thm-btn btn first-thm-btn"><?= $programs_seventh_btn_title; ?></a>
        </div>
    </div>
</section>

<?php endif; ?>
<?php get_footer()?>