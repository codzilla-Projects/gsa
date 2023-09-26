<?php

/**

** Template Name: Faculty Template

**/
    require_once( gsa_ROOT  . '/switching_languages/faculty_page_switching.php');
    get_header(); 
    $page_name_title = $faculty_page_title;
    require_once ( gsa_ROOT . 'template-parts/page-breadcrumb.php');

?>
<?php 

    if ($faculty_first_section_hidden != '1')  :
    $second = 0;

    $number = 1;

    $no = $home_fourth_number;

    $instructor = gsa_get_instructor($no);

    if($instructor->have_posts()) : 
?>

<section class="diploma-section">
    <div class="container">
        <div class="programs-section">
            

                <div class="sec-title">

                    <h2><?= $home_fourth_title; ?><span class="dot"></span></h2>

                </div>
            

                <div class="programs-carousel owl-theme owl-carousel">

                    <?php while($instructor->have_posts()) : $instructor->the_post();?>

                    <div class="diploma-items">

                        <div class="diploma-item text-center wow fadeInUp style-0<?=$number?>" data-wow-delay="<?=$second?>ms" data-wow-duration="1500ms">
                            
                            <img src="<?php the_post_thumbnail_url()?>">
                            <h3 class="thm-btn-instractor first-thm-btn mt-3"><?php the_title()?></h3>
                            <?php if (!empty(get_the_content())): ?>
                            <p class="mt-2"><?php the_content()?></p>
                            <?php endif ?>

                        </div>

                    </div>

                    <?php $number = $number + 1; $second = $second + 300; endwhile; wp_reset_query();?>

                </div>
        </div>
    </div>
</section>

<?php endif; endif?>
<?php if ($faculty_second_section_hidden != '1')  :?>
<section class="vision-banner" style="background-image:url(<?= $faculty_second_section_img; ?>)">
    <div class="vision-bg">
        <div class="vision-content">
            <div class="row">
                <div class="col-md-12">
                    <h3><?=$faculty_second_section_title?></h3>
                    <div class="para">
                        <?= $faculty_second_section_content; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif ?>
<?php if ($$faculty_fourth_hidden != '1')  :?>
<section class="details details-banner padding-50">
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image-container">
                        <img src="<?= gsa_URL.'assets/img/01icon01.png' ?>" alt="<?= $gsa_faculty_element_one_title ?>">
                    </div>
                    <h2 class="element-title"><?= $gsa_faculty_element_one_title ?></h2>
                    <p class="element-para"><?= $gsa_faculty_element_one_para ?></p>
                </div>

                <div class="col-md-6">
                    <div class="image-container">
                        <img src="<?= gsa_URL.'assets/img/01icon02.png' ?>" alt="<?= $gsa_faculty_element_two_title ?>">
                    </div>
                    <h2 class="element-title"><?= $gsa_faculty_element_two_title ?></h2>
                    <p class="element-para"><?= $gsa_faculty_element_two_para ?></p>
                </div>

            </div>
        </div>
    </div>
</section>
<?php endif ?>
<?php get_footer()?>