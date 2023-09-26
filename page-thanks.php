<?php 
	/**
	** Template Name: Thank You Template
	**/
require_once( gsa_ROOT  . '/switching_languages/thankyou_page_switching.php');
	get_header(); 
?>
<div class="thank-you" style="background-image:url('<?= $thankyou_img; ?>')">
	<div class="container">
		<div class="row d-flex justify-content-center align-items-center">
			<div class="col-md-8">
				<div class="bg-img">
					<div class="alert alert-success w-100" role="alert"><?= $thankyou_Message;?></div>
				</div>
			</div>
		</div>
		
	</div>
</div>
<?php get_footer()?>
