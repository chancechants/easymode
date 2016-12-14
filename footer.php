<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EasyMode
 */

?>

<?php wp_footer(); ?>

        <!-- SIGNUP
        =================================================================================-->
        <section id="signup" data-type="background" data-speed="3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2>Are you ready to take your website to the <strong>next level</strong>?</h2>
                        <p><a href="<?php echo site_url(); ?>/signup" class="btn btn-lg btn-block btn-success">Yes, beam me up</a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER
        =================================================================================-->
        <footer>
            <div class="container">
                <div class="col-sm-3">
                    <p><strong><a href="<?php echo site_url(); ?>">EASYMODE<span class="orange">.io</a></strong></p>
                </div>
                <div class="col-sm-6">
					<?php
						wp_nav_menu( array(
							'theme_location' 	=> 'footer',
							'container'			=> 'nav',
							'menu_class'		=> 'li-unstyled list-inline'
							)
						);
					?>
                </div>
                <div class="col-sm-3">
                    <p class="pull-right">&copy; <?php echo date('Y'); ?> <strong>EASYMODE<span class="orange">.io</strong></p>
                </div>
            </div>
        </footer>

        <!-- MODAL
        =================================================================================-->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our mailing list</h4>
                    </div>
                    <div class="modal-body">
                        <p>Simply enter your name and e-mail! As a thank you for joining us, we're going to give you a <em><strong>free web consultation</strong></em></p>
                        <?php echo do_shortcode('[contact-form-7 id="86" title="Mailing List Subscribe" html_class="form-inline"]'); ?>
                        <hr>

                        <p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br><br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
                    </div>
                </div>
            </div>
        </div>

	<!-- BOOTSTRAP CORE JAVASCRIPT
	=================================================================================-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
</body>
</html>
