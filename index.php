<?php get_header()?>
<?php require_once( gsa_ROOT  . '/switching_languages/home_page_switching.php'); ?>
<section class="banner-section" style="background: url('<?=$gsa_main_img?>');">

    <div class="container z-9">

        <div class="banner_content">

            <h3 class="banner_title"><?= $gsa_main_title; ?></h3>

            <a href="<?= $gsa_main_btn_url; ?>" class="thm-btn header-btn"><?= $gsa_main_btn_text; ?></a>

        </div>

    </div>

</section>

<?php 

if ($slider_hidden != '1')  :

    $no = $slider_number;

    $slides = gsa_get_slider_home($no);

    if($slides->have_posts()) :?>

        <section class="slider_banner sec-padding">

            <!-- If we need navigation buttons -->

            <div class="slider_banner__nav">

                <div class="swiper-button-prev" id="slider_banner__swiper-button-next">

                    <img src="<?=gsa_URL?>assets/img/arrow-left.png">

                </div>

                <div class="swiper-button-next" id="slider_banner__swiper-button-prev">

                    <img src="<?=gsa_URL?>assets/img/arrow-right.png">

                </div>

            </div><!-- /.slider_banner__nav -->

            <div class="swiper-container thm-swiper__slider" style="background-image:url(<?= $gsa_background_pattern_img; ?>)" data-swiper-options='{"slidesPerView": 1,"loop": true,"effect": "fade","autoplay": {"delay": 5000},"navigation": {"nextEl": "#slider_banner__swiper-button-next","prevEl": "#slider_banner__swiper-button-prev"}}'>

                <div class="swiper-wrapper">

                    <?php while($slides->have_posts()) : $slides->the_post();?>

                        <div class="swiper-slide">

                            <div class="container">
                                <div class="slider-container">
                                    <div class="row">

                                        <div class="col-md-6 col-sm-12 d-flex align-items-center justify-content-start img-position">

                                            <div class="slider-content">

                                                <h2><?= the_title(); ?></h2>

                                                    <p>

                                                        <?php the_content(); ?>

                                                    </p>

                                                    <?php 

                                                        $btn_txt = get_post_meta( get_the_ID(), 'gsa_slider_link_text', true );

                                                        $btn_url = get_post_meta( get_the_ID(), 'gsa_slider_link_url', true );

                                                        if ( !empty($btn_txt) && !empty($btn_url) ):?>

                                                            <a href="<?= $btn_url ?>" class="thm-btn first-thm-btn"><?= $btn_txt ?></a>

                                                        <?php endif; ?>

                                            </div>

                                        </div>

                                        <div class="col-md-6 col-sm-12">

                                            <div class="image-layer">

                                                <img src="<?= get_the_post_thumbnail_url( get_the_ID() ) ?>">

                                            </div>

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

<?php 

if ($home_fourth_hidden != '1')  :

    $second = 0;

    $number = 1;

    $no = $home_fourth_number;

    $programs = gsa_get_program($no);

    if($programs->have_posts()) : 
?>

<section class="diploma-section">
    <div class="container">
        <div class="programs-section" style="background-image:url(<?= $gsa_background_pattern_img; ?>)">
            

                <div class="sec-title">

                    <h2><?= $home_fourth_title; ?><span class="dot"></span></h2>

                </div>
            

                <div class="programs-carousel owl-theme owl-carousel">

                    <?php while($programs->have_posts()) : $programs->the_post();
                    $gsa_programs_diploma = get_post_meta( get_the_ID(), 'gsa_programs_diploma', true );
                    $gsa_programs_courses = get_post_meta( get_the_ID(), 'gsa_programs_courses', true );
                    ?>

                    <div class="diploma-items">

                        <div class="diploma-item<?php if ($gsa_programs_diploma) :?> diploma <?php else:?> courses <?php endif ?> text-center wow fadeInUp style-0<?=$number?>" data-wow-delay="<?=$second?>ms" data-wow-duration="1500ms">
                            
                            <img src="<?php the_post_thumbnail_url()?>">
                            <div class="program-content">
                                <a href="<?php the_permalink()?>" class="thm-btn first-thm-btn mt-3"><?php the_title()?></a>
                                <p class="mt-2"><?php the_content()?></p>
                            </div>

                        </div>

                    </div>

                    <?php $number = $number + 1; $second = $second + 300; endwhile; wp_reset_query();?>

                </div>
        </div>
    </div>
</section>

<?php endif; endif?>


<section class="certificate sec-padding">

    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <h2><?=$certificate_title ?></h2>

                <p><?= $certificate_content ?></p>

                <a href="<?=$certificate_link_url ?>" class="thm-btn second-thm-btn desktop"><?=$certificate_link_text ?></a>

            </div>

            <div class="col-md-8">

                <div class="certificate-img">

                    <img src="<?=$gsa_certificate_img ?>">

                </div>
                <a href="<?=$certificate_link_url ?>" class="thm-btn second-thm-btn mobile"><?=$certificate_link_text ?></a>

            </div>

        </div>

    </div>

</section>



<?php if ($video_hidden != '1')  : ?>

        <section class="video-popup" style="background-image:url(<?= $gsa_video_img ?>)">

            <div class="play-btn"> 
                <a data-fancybox data-width="640" data-height="360" href="<?php if (!empty($gsa_youtube_video)) : ?><?=$gsa_youtube_video ?><?php else: ?> <?=$gsa_video?> <?php endif; ?> " id = "vid-open">
                    <img src="<?= gsa_URL.'assets/img/01video-play.png' ?>" alt="Play">
                </a>
            </div>

            <h2 class = "vid-title"><?= $video_text; ?></h2>

        </section>

<?php endif; ?>



<?php if ($seventh_hidden != '1')  :?>

    <section class="home-faculty" style="background-image:url(<?= $gsa_home_seventh_img ?>)">

        <a href = "<?= $gsa_home_seventh_url ?>" class = "thm-btn first-thm-btn"><?= $gsa_home_seventh_text ?></a>

    </section>

<?php endif; ?>



<?php if ($eighth_hidden != '1')  : ?>

    <section class="details details-banner">
        <div class="details-item" style="background-image:url('<?= $gsa_background_pattern_img; ?>')">
            <div class="container">

                <div class="row">



                    <div class="col-md-6">

                        <div class="image-container">

                            <img src="<?= $gsa_home_element_one_img; ?>" alt="<?= $gsa_home_element_one_title ?>">

                        </div>

                        <h2 class="element-title"><?= $gsa_home_element_one_title ?></h2>

                        <p class="element-para"><?= $gsa_home_element_one_para ?></p>

                    </div>



                    <div class="col-md-6">

                        <div class="image-container">

                            <img src="<?= $gsa_home_element_two_img; ?>" alt="<?= $gsa_home_element_two_title ?>">

                        </div>

                        <h2 class="element-title"><?= $gsa_home_element_two_title ?></h2>

                        <p class="element-para"><?= $gsa_home_element_two_para ?></p>

                    </div>


                </div>

            </div>
        </div>

    </section>

<?php endif; ?>



<?php if ($ninth_hidden != '1'): ?>


<section class="become-student" style="background-image:url(<?php if (wp_is_mobile()): ?><?= $gsa_home_ninth_mobile_img ?><?php else: ?><?= $gsa_home_ninth_img; ?><?php endif; ?>)">
    <div class="content">
        <h2 class="headline"><?= $gsa_home_ninth_headline; ?></h2>
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn thm-btn first-thm-btn"><?= $gsa_home_ninth_btntext; ?></a>
    </div>
</section>

<?php endif; ?>



<?php if($tenth_hidden != '1' ): ?>

<section class="become-partner">
    <div class="partners" style="background-image:url(<?= $gsa_background_pattern_img; ?>)">
        <div class="container text-center">
            <img src = "<?= $gsa_home_tenth_img;?>" alt = "<?= $gsa_home_tenth_headline ?>">
            <h2 class = "headline"><?= $gsa_home_tenth_headline; ?></h2>
            <a href = "<?= $gsa_home_tenth_btnurl; ?>" class = "thm-btn btn first-thm-btn"><?= $gsa_home_tenth_btntext; ?></a>
        </div>
    </div>
</section>

<?php endif; ?>



<?php get_footer()?>