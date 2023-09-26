<?php

/**

** Template Name: Programs Template

**/
    require_once( gsa_ROOT  . '/switching_languages/programs_page_switching.php');
    get_header(); 

    $page_name_title = $programs_page_title;

    require_once ( gsa_ROOT . 'template-parts/page-breadcrumb.php');

?>
<section class="headline padding-50">
    <div class="container">
        <div class="bg" style="background-image:url(<?= $gsa_background_pattern_img; ?>)">
            <div class="headline-title">
                <h2><?= $programs_first_section_title; ?></h2>
                <p><?= $programs_first_section_sub_title; ?></p>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex justify-content-start">
                    <a href="<?= $programs_first_block_url; ?>">
                        <div class="headline-item">
                            <div class="headline-item-img">
                                <img src="<?= $programs_first_block_img; ?>">
                            </div>
                            <div class="headline-item-content">
                                <h3><?= $programs_first_block_title; ?></h3>
                                <p>
                                    <?= $programs_first_block_content; ?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="<?= $programs_second_block_url; ?>">
                        <div class="headline-item">
                            <div class="headline-item-img">
                                <img src="<?= $programs_second_block_img; ?>">
                            </div>
                            <div class="headline-item-content">
                                <h3><?= $programs_second_block_title; ?></h3>
                                <p>
                                    <?= $programs_second_block_content; ?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-3rd sec-padding programs-partner" style="background-image:url(<?= $gsa_background_pattern_img; ?>)">
    <div class="about-3rd-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-12 col-sm-12 left">
                    <div class="sec-title">
                        <h2><?= $second_programs_first_block_title; ?></h2>
                    </div>
                    <div class="image-container">
                        <img src="<?= $second_programs_first_block_img; ?>" alt="Partner University">
                    </div>
                    <h3 class="title"><?= $second_programs_first_block_sub_title; ?></h3>
                    <p class="para">
                        <?= $second_programs_first_block_content; ?>
                    </p>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12 right">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="sec-title">
                                <h2>
                                    <?= $second_programs_second_block_title ?>
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="image-container">
                                <img src="<?= $second_programs_second_block_img; ?>" alt="Partner University">
                            </div>
                            <h3 class="title"><?= $second_programs_second_block_sub_title; ?></h3>
                            <p class="para">
                                <?= $second_programs_second_block_content; ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="image-container">
                                <img src="<?= $second_programs_third_block_img; ?>" alt="Partner University">
                            </div>
                            <h3 class="title"><?= $second_programs_third_block_sub_title; ?></h3>
                            <p class="para">
                                <?= $second_programs_third_block_content; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 

if ($diploma_hidden != '1')  :

    $second = 0;

    $no = $diploma_number;

    $programs = gsa_get_program_programs(-1);

    if($programs->have_posts()) : 
?>
<section class="programs sec-padding">
    <div class="container">
        <div class="headline-title">
            <h2><?= $programs_third_section_title; ?></h2>
            <p><?= $programs_third_section_sub_title; ?></p>
        </div>
        <div class="programs-three-carousel owl-theme owl-carousel">
            <?php while($programs->have_posts()) : $programs->the_post();
            $gsa_programs_diploma = get_post_meta( get_the_ID(), 'gsa_programs_diploma', true );
            $gsa_programs_courses = get_post_meta( get_the_ID(), 'gsa_programs_courses', true );
            ?>
            <div class="wow fadeInUp" data-wow-delay="<?=$second?>ms" data-wow-duration="1500ms">
                <div class="programs-blocks">
                    <div class="program-item">
                        <div class="program-item-img">
                            <img  src="<?php the_post_thumbnail_url()?>">
                        </div>
                        <div class="program-item-content">
                            <h3><?php the_title()?></h3>
                            <?php if (!empty(get_the_content())): ?>
                            <p>
                                <?php the_content()?>
                            </p>
                            <?php endif ?>
                            
                        </div>
                    </div>
                    <a href="<?php the_permalink()?>" class="thm-btn d-block mt-3 text-center"><?php _e('Learn More','gsa'); ?></a>
                </div>
            </div>
            <?php $second = $second + 300; endwhile; wp_reset_query();?>
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
<?php if ($programs_vision_hidden != '1')  : ?>
<div class="vid-back">

    <section class="video-popup" style="background-image:url(<?= $programs_fifth_img; ?>)">

        <div class="play-btn"> 
            <a data-fancybox data-width="640" data-height="360" href="<?= $programs_fifth_link_url; ?>" id = "vid-open">
                <img src="<?= gsa_URL.'assets/img/01video-play.png' ?>" alt="Play">
            </a>
        </div>

        <h2 class = "vid-title"><?= $programs_fifth_title; ?></h2>
    </section>
</div>
<?php endif; ?>
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
            <a href = "<?= $programs_seventh_btn_url; ?>" class = " thm-btn btn first-thm-btn"><?= $programs_seventh_btn_title; ?></a>
        </div>
    </div>
</section>
<?php endif; ?>
<?php get_footer()?>