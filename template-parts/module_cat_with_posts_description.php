<div class="accordion" id="accordionExample">
    <?php
     $first_flag =true;
     $number = 1;
	$args = array(
		'taxonomy'         => 'tips', 
		'hide_empty'       => 1,
		'meta_key'         => 'programs_order',
    	'meta_compare'     => 'NUMERIC',
    	'orderby'          => 'meta_value_num',
		'include'          => $third_sec_category,
		'order'            => 'ASC',
		);
        $categories = get_terms('tips', $args);;
    foreach ( $categories as $key => $cat ) { ?>

    <div class="accordion-item">
        <h2 class="accordion-header" id="heading<?=$cat->term_id;?>">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$cat->term_id;?>" aria-expanded="<?=$first_flag ? 'true' : 'false' ?>" aria-controls="collapse<?=$cat->term_id;?>">
            <?=$cat->name; ?>
            </button>
        </h2>
        <div id="collapse<?=$cat->term_id;?>" class="accordion-collapse collapse <?=$first_flag ? 'show' : ' ' ?>" aria-labelledby="heading<?=$cat->term_id;?>" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="accordion" id="accordionsubExample">
                    <?php 
                        
                        $second_flag =true;
                        $module = gsa_get_module(-1, $cat->term_id);
                        if($module->have_posts()) :
                    ?>
                    <?php while($module->have_posts()) : $module->the_post();?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading<?=get_the_ID() ?>">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=get_the_ID() ?>" aria-expanded="<?=$second_flag ? 'true' : 'false' ?>" aria-controls="collapse<?=get_the_ID() ?>">
                            <?=$number?>. <?php the_title() ?>
                          </button>
                        </h2>
                        <div id="collapse<?=get_the_ID() ?>" class="accordion-collapse collapse <?=$second_flag ? 'show' : 'hide' ?>" aria-labelledby="heading<?=get_the_ID() ?>" data-bs-parent="#accordion<?=get_the_ID() ?>">
                          <div class="accordion-body">
                           <?php the_content()?>
                          </div>
                        </div>
                    </div>
                    <?php $number++; $second_flag = false; endwhile; wp_reset_query(); endif?>
                </div>
            </div>
        </div>
    </div>
    <?php $first_flag = false; ?>
    <?php } ?>
</div>
