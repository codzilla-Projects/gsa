<?php

/**

** Template Name: Privacy Policy Template

**/

	get_header(); 
?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<div class="container p-5">
     <div class="row pt-5">
          <div class="col-lg-12 col-md-12">
               <?php the_content();?>
	      </div>
	</div>
</div>
<?php endwhile;endif; ?>

<?php get_footer()?>