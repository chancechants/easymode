<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package EasyMode
 */

get_header(); ?>

    <!-- RESOURCES PARALLAX -->
    <section class="featurette2" data-name="featurette2" data-type="background" data-speed="2">
        <h1 class="page-title">404 finding that page was hard mode</h1>
    </section>

    <div class="container">
        <div class="row" id="primary">
            <section class="main-content">
				<h2>Sorry, we couldn't find that page. <small>Perhaps something else on our site would interest you</small></h2>
                <hr>
                <div class="resource-row clearfix">
                    <div class="resource">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/digitalocean.png" alt="DigitalOcean">
                        <h3><a href="https://m.do.co/c/5fecfee30e15" target="_blank">DigitalOcean</a></h3>
                        <p>SSD Virtual Private Servers starting at $5? You had me at SSD. I've been a DO admin for the past 3 years and they have never let me down. Truly a 99.99% uptime service. You can scale all of your services up easily and turn on back-ups or snapshots with a push of a button or spin up a new instance to try out a new server config or platform for a few hours for less than a dollar.</p>
                        <a href="https://m.do.co/c/5fecfee30e15" target="_blank" class="btn btn-success">Get DigitalOcean &raquo;</a>
                    </div>

                    <div class="resource">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/visualstudio.png" alt="Visual Studio">
                        <h3><a href="https://www.visualstudio.com" target="_blank">Visual Studio</a></h3>
                        <p>Microsoft has come a long way, their Edge browser is ahead of Chrome in some studies and they've opened up ASP.NET to the Unix world. <br/><br/>Visual Studio Community Edition and Visual Studio Code are FREE development environments provided by Microsoft and it's really worth checking out. This entire site was created in Visual Studio Code. For projects big or small I highly recommend checking them out.</p>
                        <a href="https://www.visualstudio.com" target="_blank" class="btn btn-success">Check out Visual Studio &raquo;</a>
                    </div>

                    <div class="resource">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/udemy.gif" alt="udemy" width="342" height="200">
                        <h3><a href="https://www.udemy.com" target="_blank">Udemy</a></h3>
                        <p>I am enrolled in <a href="https://www.udemy.com/user/aaronrosario/?subscribed_course=1&key=subscribed_courses" target="_blank">109</a> courses on Udemy. You should definitely read the reviews to make sure the course it up to par. Not all of the content is perfect but some of it is extremely high quality and affordable (most of my classes were $10 during sales).</p>
                        <a href="https://www.udemy.com" target="_blank" class="btn btn-success">Check out Udemy &raquo;</a>
                    </div>                                         
                </div>            
            </section>
        </div>
    </div>	
<!--
	<div class="container">
		<div id="primary" class="content-area">
			<main id="content" class="col-sm-8" role="main">
				<div class="error-404 not-found">
					<div class="page-content">
						<div class="container">
							<div class="row" id="primary">
								<section class="main-content">
									<h1>Sorry, we couldn't find that page.</h1>
									<hr>
									<div class="resource-row clearfix">
										<div class="resource">
											<img src="<?php bloginfo('template_directory'); ?>/assets/img/digitalocean.png" alt="DigitalOcean">
											<h3><a href="https://m.do.co/c/5fecfee30e15" target="_blank">DigitalOcean</a></h3>
											<p>SSD Virtual Private Servers starting at $5? You had me at SSD. I've been a DO admin for the past 3 years and they have never let me down. Truly a 99.99% uptime service. You can scale all of your services up easily and turn on back-ups or snapshots with a push of a button or spin up a new instance to try out a new server config for a few hours for pennies. 10/10 Will sail with them again.</p>
											<a href="https://m.do.co/c/5fecfee30e15" target="_blank" class="btn btn-success">Get DigitalOcean &raquo;</a>
										</div>

										<div class="resource">
											<img src="<?php bloginfo('template_directory'); ?>/assets/img/visualstudio.png" alt="Visual Studio">
											<h3><a href="https://www.visualstudio.com" target="_blank">Visual Studio</a></h3>
											<p>Microsoft has come a long way, their Edge browser is ahead of Chrome in some studies and they've opened up ASP.NET to the Unix world. <br/><br/>Visual Studio Community Edition and Visual Studio Code are FREE development environments provided by Microsoft and it's really worth checking out. This entire site was created in Visual Studio Code. For projects big or small I highly recommend checking them out.</p>
											<a href="https://www.visualstudio.com" target="_blank" class="btn btn-success">Check out Visual Studio &raquo;</a>
										</div>

										<div class="resource">
											<img src="<?php bloginfo('template_directory'); ?>/assets/img/udemy.gif" alt="udemy" width="342" height="200">
											<h3><a href="https://www.udemy.com" target="_blank">Udemy</a></h3>
											<p>I am enrolled in <a href="https://www.udemy.com/user/aaronrosario/?subscribed_course=1&key=subscribed_courses" target="_blank">109</a> courses on Udemy. You should definitely read the reviews to make sure the course it up to par. Not all of the content is perfect but some of it is extremely high quality and affordable (most of my classes were $10 during sales).</p>
											<a href="https://www.udemy.com" target="_blank" class="btn btn-success">Check out Udemy &raquo;</a>
										</div>                                         
									</div>            
								</section>
							</div>
						</div>						
					</div>
				</div>
			</main>
			<aside class="col-sm-4">
				<php get_side_bar(); ?>
			</aside>
		</div>
	</div>-->

<?php
get_footer();
