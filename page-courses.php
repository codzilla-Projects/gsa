<?php
/**
** Template Name: Management Courses Template
**/

    require_once( gsa_ROOT  . '/switching_languages/courses_page_switching.php');
    get_header(); 
    $page_name_title = $courses_page_title;

    require_once ( gsa_ROOT . 'template-parts/page-breadcrumb.php');
?>
<?php 
    if ($slider_hidden != '1')  :
    $no = $slider_number;
    $slides = gsa_get_slider_courses($no);
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

if ($courses_hidden != '1')  :
?>
<section class="programs sec-padding">
    <div class="bg" style="background-image:url(<?= $gsa_background_pattern_img; ?>)">    
        <div class="container">
            <div class="headline-title">
                <h2><?= $courses_first_section_title; ?></h2>
                <p><?= $courses_first_section_subtitle; ?></p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="programs-blocks">
                        <div class="program-item">
                            <div class="program-item-img">
                                
                                <img src="<?= $first_courses_first_block_img; ?>">
                            </div>
                            <div class="program-item-content">
                                <h3><?= $first_courses_first_block_title; ?></h3>
                                
                                <p>
                                    
                                    <?= $first_courses_first_block_content?>
                                </p>
                                
                            </div>
                        </div>
                       <a href="<?= $first_courses_first_block_link_url; ?>" class="thm-btn d-block mt-3 text-center"><?= $first_courses_first_block_link_text; ?></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="programs-blocks">
                        <div class="program-item">
                            <div class="program-item-img">
                                
                                <img src="<?= $first_courses_second_block_img; ?>">
                            </div>
                            <div class="program-item-content">
                                <h3><?= $first_courses_second_block_title; ?></h3>
                                
                                <p>
                                    <?= $first_courses_second_block_content?>
                                </p>
                                
                            </div>
                        </div>
                       <a href="<?= $first_courses_second_block_link_url; ?>" class="thm-btn d-block mt-3 text-center"><?= $first_courses_second_block_link_text; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>
<?php 
if ($courses_second_section_hidden != '1')  :
?>


<section class="about-3rd">
    <div class="about-3rd-bg" style="background-image:url(<?= $gsa_background_pattern_img; ?>)">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 left">
                    <div class="sec-title">
                        <h2><?= $second_courses_first_block_title; ?></h2>
                    </div>
                    <div class="image-container">
                        <img src="<?= $second_courses_first_block_img; ?>" alt="Partner University">
                    </div>
                    <h3 class="title"><?= $second_courses_first_block_sub_title; ?></h3>
                    <p class="para">
                        <?= $second_courses_first_block_content; ?>
                    </p>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 right">
                    <div class="sec-title">
                        <h2>
                            <?= $second_courses_second_block_title ?>
                        </h2>
                    </div>
                    <div class="image-container">
                        <img src="<?= $second_courses_second_block_img; ?>" alt="Partner University">
                    </div>
                    <h3 class="title"><?= $second_courses_second_block_sub_title; ?></h3>
                    <p class="para">
                        <?= $second_courses_second_block_content; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>
<?php 
if ($courses_third_section_hidden != '1')  :
?>
<section class="details details-banner padding-50">
    <div class="container headline" style="background-image:url(<?= $gsa_background_pattern_img; ?>)">
        <div class="headline-title">
            <h2><?= $courses_third_section_title; ?></h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="image-container">
                    <img src="<?= $third_courses_first_block_img;?>" alt="Lorem ipsum">
                </div>
                <h2 class="element-title"><?= $third_courses_first_block_title;?></h2>
                <p class="element-para">
                    <?=$third_courses_first_block_content;?>
                </p>
            </div>

            <div class="col-md-4">
                <div class="image-container">
                    <img src="<?= $third_courses_second_block_img;?>" alt="Lorem ipsum">
                </div>
                <h2 class="element-title"><?= $third_courses_second_block_title;?></h2>
                <p class="element-para">
                    <?=$third_courses_second_block_content;?>
                </p>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="<?= $third_courses_third_block_img;?>" alt="Lorem ipsum">
                </div>
                <h2 class="element-title"><?= $third_courses_third_block_title;?></h2>
                <p class="element-para">
                    <?=$third_courses_third_block_content;?>
                </p>
            </div>
        </div>
    </div>
</section>
<?php endif;?>
<?php 
if ($courses_fourth_section_hidden != '1')  :
?>
<section class="details details-banner padding-50">
    <div class="container headline" style="background-image:url(<?= $gsa_background_pattern_img; ?>)">
        <div class="headline-title">
            <h2><?= $courses_fourth_section_title; ?></h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="image-container">
                    <img src="<?= $fourth_courses_first_block_img;?>" alt="Lorem ipsum">
                </div>
                <h2 class="element-title"><?= $fourth_courses_first_block_title;?></h2>
                <p class="element-para">
                    <?=$fourth_courses_first_block_content;?>
                </p>
            </div>

            <div class="col-md-4">
                <div class="image-container">
                    <img src="<?= $fourth_courses_second_block_img;?>" alt="Lorem ipsum">
                </div>
                <h2 class="element-title"><?= $fourth_courses_second_block_title;?></h2>
                <p class="element-para">
                    <?=$fourth_courses_second_block_content;?>
                </p>
            </div>
            <div class="col-md-4">
                <div class="image-container">
                    <img src="<?= $fourth_courses_third_block_img;?>" alt="Lorem ipsum">
                </div>
                <h2 class="element-title"><?= $fourth_courses_third_block_title;?></h2>
                <p class="element-para">
                    <?=$fourth_courses_third_block_content;?>
                </p>
            </div>
        </div>
    </div>
</section>
<?php endif ?>
<?php if ($ninth_hidden != '1'): ?>

<section class="become-student" style="background-image:url(<?= $programs_sixth_img; ?>)">
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