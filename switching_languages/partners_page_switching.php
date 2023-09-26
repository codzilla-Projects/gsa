<?php 
$lang = ICL_LANGUAGE_CODE;
$perfix = $lang === 'ar' ? '_ar' : '';
$gsa_background_pattern_img                     = get_option('gsa_background_pattern_img');
		$purchase_form_img       = get_option('purchase_form_img');
        $purchase_left_title     = get_option('purchase_left_title'.$perfix);
        $purchase_first_img      = get_option('purchase_first_img');
        $purchase_second_img     = get_option('purchase_second_img');
        $purchase_third_img      = get_option('purchase_third_img');
        $purchase_form_title     = get_option('purchase_form_title'.$perfix);