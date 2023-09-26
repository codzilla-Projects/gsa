		<footer class="main-footer">
			<div class="container">
				<div class="row">

					<div class="col-md-3">
						<div class="logo-container">
							<img src="<?= get_option('gsa_footer_logo_img') ?>" alt="footer logo" class="logo">
						</div>
					</div>

					<div class="col-md-3">
						<div class="footer-nav">
							 <?php if ( is_active_sidebar('first_sidebar') ) : ?>
	                            <?php dynamic_sidebar('first_sidebar'); ?>
	                        <?php endif; ?>
						</div>
					</div>

					<div class="col-md-3">
						<div class="footer-nav">
							 <?php if ( is_active_sidebar('second_sidebar') ) : ?>
                                <?php dynamic_sidebar('second_sidebar'); ?>
                            <?php endif; ?>
						</div>
					</div>

					<div class="col-md-3">
						<div class="footer-contact">
							<div class="social-icons">
								<ul>
									<?php if (!empty(get_option('gsa_fb'))) :?>
									<li>
										<a href="<?= get_option('gsa_fb') ?>">
											<img src="<?= gsa_URL.'assets/img/flaticon/output-facebook-app-symbol.png'?>" alt="facebook">
										</a>
									</li>
									<?php endif ?>
									<?php if (!empty(get_option('gsa_insta'))) :?>
									<li>
										<a href="<?= get_option('gsa_insta') ?>">
											<img src="<?= gsa_URL.'assets/img/flaticon/output-instagram.png'?>" alt="instagram">
										</a>
									</li>
									<?php endif ?>
									<?php if (!empty(get_option('gsa_twitter'))) :?>
									<li>
										<a href="<?= get_option('gsa_twitter') ?>">
											<img src="<?= gsa_URL.'assets/img/flaticon/output-twitter.png'?>" alt="twitter">
										</a>
									</li>
									<?php endif ?>
									<?php if (!empty(get_option('gsa_linkedin'))) :?>
									<li>
										<a href="<?= get_option('gsa_linkedin') ?>">
											<img src="<?= gsa_URL.'assets/img/flaticon/output-linkedin.png'?>" alt="linkedin">
										</a>
									</li>
									<?php endif ?>
								</ul>
							</div>
							<div class="contact-info">
								<ul>
									<?php if (!empty(get_option('gsa_phone'))) :?>
									<li class = "tel">
										<a href="tel:<?= get_option('gsa_phone') ?>">
											<img src="<?= gsa_URL.'assets/img/flaticon/output-phone.png'?>" alt="phone">
											<span class="info">+<?= get_option('gsa_phone') ?></span>
										</a>
									</li>
									<?php endif ?>
									<?php if (!empty(get_option('gsa_second_phone'))) :?>
									<li class = "tel">
										<a href="tel:<?= get_option('gsa_second_phone') ?>">
											<img src="<?= gsa_URL.'assets/img/flaticon/output-phone.png'?>" alt="phone">
											<span class="info">+<?= get_option('gsa_second_phone') ?></span>
										</a>
									</li>
									<?php endif ?>
									<?php if (!empty(get_option('gsa_email'))) :?>
									<li class="info">
										<a href="mailto:<?= get_option('gsa_email') ?>">
											<img src="<?= gsa_URL.'assets/img/flaticon/output-envelope.png'?>" alt="mail">
											<span class="info"><?= get_option('gsa_email') ?></span>
										</a>
									</li>
									<?php endif ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
				<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="inner clearfix">
					<div class="copyright">
						<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
						<?php _e('All Rights Reserved','gsa'); ?>
						<?php else: ?>
							كل الحقوق محفوظة
						<?php endif ?>
						 &copy; <?= date("Y"); ?> 
						<a href="<?php bloginfo('url') ?>"> <?php bloginfo('name') ?></a>. | 
						<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
							<?php wp_nav_menu( array( 'menu' => 'Privacy Policy')); ?>
						<?php else: ?>
							<?php wp_nav_menu( array( 'menu' => 'سياسة الخصوصية')); ?>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
	</body>

	<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

	<?php wp_footer()?>

<!-- Modal -->
<div class="modal become-popup fade bd-example-modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-primarycolor">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
			<?= do_shortcode('[mailpoet_form id="1"]'); ?>
		<?php else: ?>
		  	<?= do_shortcode('[mailpoet_form id="2"]'); ?>
		<?php endif ?>
      </div>
    </div>
  </div>
</div>

</html>