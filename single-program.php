<?php  
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID(); 
$page_name_title = get_the_title();

$hide_first_section       = get_post_meta($post_id,'hide_first_section',true);
$first_sec_title          = get_post_meta($post_id,'first_sec_title',true);
$first_sec_content        = get_post_meta($post_id,'first_sec_content',true);
$hide_second_section      = get_post_meta($post_id,'hide_second_section',true);
$second_sec_title         = get_post_meta($post_id,'second_sec_title',true);
$second_sec_first_number  = get_post_meta($post_id,'second_sec_first_number',true);
$second_sec_first_title   = get_post_meta($post_id,'second_sec_first_title',true);
$second_sec_first_content = get_post_meta($post_id,'second_sec_first_content',true);
$second_sec_second_number = get_post_meta($post_id,'second_sec_second_number',true);
$second_sec_second_title  = get_post_meta($post_id,'second_sec_second_title',true);
$second_sec_second_content= get_post_meta($post_id,'second_sec_second_content',true);
$second_sec_third_number  = get_post_meta($post_id,'second_sec_third_number',true);
$second_sec_third_title   = get_post_meta($post_id,'second_sec_third_title',true);
$second_sec_third_content = get_post_meta($post_id,'second_sec_third_content',true);
$hide_third_section       = get_post_meta($post_id,'hide_third_section',true);
$third_sec_title          = get_post_meta($post_id,'third_sec_title',true);
$third_sec_category       = get_post_meta($post_id,'third_sec_category',true);
$hide_fourth_section      = get_post_meta($post_id,'hide_fourth_section',true);
$fourth_sec_title         = get_post_meta($post_id,'fourth_sec_title',true);
$fourth_sec_content       = get_post_meta($post_id,'fourth_sec_content',true);
$fourth_sec_img           = get_post_meta($post_id,'fourth_sec_img',true);
$hide_fivth_section       = get_post_meta($post_id,'hide_fivth_section',true);
$fivth_sec_category       = get_post_meta($post_id,'fivth_sec_category',true);
$fivth_sec_number         = get_post_meta($post_id,'fivth_sec_number',true);
$hide_sixth_section       = get_post_meta($post_id,'hide_sixth_section',true);
$sixth_sec_title          = get_post_meta($post_id,'sixth_sec_title',true);
$hide_faq_section         = get_post_meta($post_id,'hide_faq_section',true);
$faq_sec_title            = get_post_meta($post_id,'faq_sec_title',true);
$meta_value               = get_post_meta($post_id,'gsa_programs_types', true );
$cat_show                 = get_post_meta($post_id,'cat_show', true );
$hide_instructor_section  = get_post_meta($post_id,'hide_instructor_section',true);
$instructor_sec_title     = get_post_meta($post_id,'instructor_sec_title',true);
$instructor_sec_category  = get_post_meta($post_id,'instructor_sec_category',true);
$programs_in              = get_post_meta($post_id,'sixth_sec_category',true);


require_once ( gsa_ROOT . 'template-parts/page-breadcrumb.php'); 
?>
<?php if ($hide_first_section  != '1')  :?>
<section class="diploma-first sec-padding">
    <div class="container">
        <h4><?=$first_sec_title ?><?=$gsa_programs_post ?></h4>
        <p>
            <?=$first_sec_content ?>
        </p>
    </div>
</section>
<?php endif?>

<?php if ($hide_second_section  != '1')  :?>
<section class="diploma-second sec-padding">
    <div class="container headline" style="background-image:url(<?= get_option('gsa_background_pattern_img'); ?>)">
        <div class="headline-title">
            <h2><?=$second_sec_title?></h2>
        </div>
        <div class="row">
            <div class="<?php if (empty($second_sec_third_number) ) :?>col-md-6 <?php else: ?>col-md-4 <?php endif; ?> text-center">
                <div class="counter-block">
                    <div class="number">
                        <h2>
                            <?=$second_sec_first_number?>
                        </h2>
                    </div>
                    <div class="number-title">
                        <?=$second_sec_first_title?>
                    </div>
                    <div class="number-text">
                        <?=$second_sec_first_content?>
                    </div>
                </div>
            </div>

            <div class="<?php if (empty($second_sec_third_number) ) :?>col-md-6 <?php else: ?>col-md-4 <?php endif; ?> text-center">
                <div class="counter-block">
                    <div class="number">
                        <h2>
                            <?=$second_sec_second_number?>
                        </h2>
                    </div>
                    <div class="number-title">
                        <?=$second_sec_second_title?>
                    </div>
                    <div class="number-text">
                        <?=$second_sec_second_content?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
               <div class="counter-block">
                    <div class="number">
                        <h2>
                            <?=$second_sec_third_number?>
                        </h2>
                    </div>
                    <div class="number-title">
                        <?=$second_sec_third_title?>
                    </div>
                    <div class="number-text">
                        <?=$second_sec_third_content?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php if ( ICL_LANGUAGE_CODE=='en' ) :?><?php bloginfo('url')?>/become-a-partner/<?php else: ?><?php bloginfo('url')?>/كن-شريكا/<?php endif ?>" class="thm-btn second-thm-btn"> <?php _e('Become A Partner','gsa'); ?></a>
            </div>
        </div>
    </div>
</section>
<?php endif?>





<?php if ($hide_third_section  != '1' And $third_sec_category != null) :?>
<section class="diploma-third sec-padding">
    <div class="container">
        <div class="modules-title">
            <h2><?php if ($meta_value === 'diploma'): ?><?php echo $third_sec_diploma_title; ?><?php else: ?><?php echo $third_sec_courses_title; ?><?php endif?></h2>
        </div>
        <?php if ($cat_show === '1'): ?>
            <?php require_once ( gsa_ROOT . 'template-parts/module_cat_description.php');?>
        <?php elseif ($cat_show === '2') :?>
            <?php require_once ( gsa_ROOT . 'template-parts/module_cat_with_posts_title.php');?>
        <?php else: ?>
            <?php require_once ( gsa_ROOT . 'template-parts/module_cat_with_posts_description.php');?>
        <?php endif ?>
    </div>
</section>

<?php endif?>
<?php 
if ($hide_instructor_section != '1')  :
    $second = 0;
    $number = 1;
    $instructors = $instructor_sec_category;
    $instructor = gsa_get_instructor_single(-1, $instructor);
    if($instructor->have_posts()) : 
?>

<section class="diploma-section">
    <div class="container">
        <div class="programs-section">  
            <div class="headline-title">
                <h2><?= $instructor_sec_title; ?></h2>
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

<?php if ($hide_fourth_section  != '1')  :?>
<section class="certificate">
    <div class="container">
        <div class="row">
            <div class="col-md-4 content">
                <h2><?= $fourth_sec_title?></h2>
                <p><?= $fourth_sec_content?></p>
                 <a href="<?php if ( ICL_LANGUAGE_CODE=='en' ) :?><?php bloginfo('url')?>/become-a-partner/<?php else: ?><?php bloginfo('url')?>/كن-شريكا/<?php endif ?>" class="thm-btn second-thm-btn desktop"> <?php _e('Become A Partner','gsa'); ?></a>
            </div>
            <div class="col-md-8 image">
                <div class="certificate-img">
                    <img src="<?= $fourth_sec_img?>">
                </div>
                <a href="<?php if ( ICL_LANGUAGE_CODE=='en' ) :?><?php bloginfo('url')?>/become-a-partner/<?php else: ?><?php bloginfo('url')?>/كن-شريكا/<?php endif ?>" class="thm-btn second-thm-btn mobile"> <?php _e('Become A Partner','gsa'); ?></a>
            </div>
        </div>
    </div>
</section>
<?php endif ?>

<?php if ($hide_fivth_section  != '1' And $fivth_sec_category != null)  :
    $headlines = $fivth_sec_category;
    $headlines = gsa_get_headline(-1, $headlines);
    if($headlines->have_posts()) :
?>
<section class="headlines-1 diploma-sixth sec-padding">
    <div class="container">
        <div class="diploma-sixth-title">
            <h2><?= get_option('diploma_sixth_title'); ?></h2>
        </div>
        <div class="row">
            <?php while($headlines->have_posts()) : $headlines->the_post();?>
            <div class="col-md-4">
                <div class="headline-item">
                  <div class="icons">
                      <img src="<?php the_post_thumbnail_url()?>">
                  </div> 
                  <div class="headline-details">
                      <h3>
                         <?php the_title()?>
                      </h3>
                      <p><?php the_content()?></p>
                  </div> 
                </div> 
            </div>
            <?php endwhile; wp_reset_query();?>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php if ( ICL_LANGUAGE_CODE=='en' ) :?><?php bloginfo('url')?>/become-a-partner/<?php else: ?><?php bloginfo('url')?>/كن-شريكا/<?php endif ?>" class="thm-btn second-thm-btn"> <?php _e('Become A Partner','gsa'); ?></a>
            </div>
        </div>
    </div>
</section>
<?php endif;endif; ?>
<?php 
    if ($hide_faq_section != '1')  :
    $faqs = gsa_get_faq_single(-1);
    if($faqs->have_posts()) :
?>
<section class="diploma-seventh sec-padding diploma-third">
    <div class="container">
        <div class="diploma-seventh-title">
            <h2><?= $faq_sec_title?></h2>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
        <?php while($faqs->have_posts()) : $faqs->the_post();?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading_<?=get_the_ID()?>">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse_<?=get_the_ID()?>" aria-expanded="false" aria-controls="flush-collapse_<?=get_the_ID()?>">
                <?php the_title()?>
              </button>
            </h2>
            <div id="flush-collapse_<?=get_the_ID()?>" class="accordion-collapse collapse" aria-labelledby="flush-heading_<?=get_the_ID()?>" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                  <?php the_content()?>
              </div>
            </div>
          </div>
          <?php endwhile; wp_reset_query();?>
        </div>
    </div>
</section>
<?php endif; endif?>
<?php 
if ($hide_sixth_section != '1')  :
    $second = 0;
    $programs = gsa_get_program_post_in(-1, $programs_in);
    if($programs->have_posts()) : 
?>
<section class="diplomas programs diploma-sixth padding-50">
    <div class="bg">
        <div class="container">
            <div class="headline-title">
                <h2><?=$sixth_sec_title?></h2>
            </div>
            <div class="row">
                <?php while($programs->have_posts()) : $programs->the_post();?>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="<?=$second?>ms" data-wow-duration="1500ms">
                    <div class="diplomas-blocks">
                        <div class="diploma-item">
                            <div class="diploma-item-img">
                                <img src="<?php the_post_thumbnail_url()?>">
                            </div>
                            <div class="diploma-item-content">
                                <h3><?php the_title()?></h3>
                                <?php if (!empty(get_the_content())): ?>
                                <p>
                                    <?php the_content() ?>
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
    </div>
</section>
<?php endif; endif;?>
<?php endwhile; endif;?>
<?php get_footer()?>