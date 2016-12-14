<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EasyMode
 */

// Custom Fields
$landingpage_price  = get_post_meta(8,'landingpage_price',true);
$customsite_price   = get_post_meta(8,'customsite_price',true);
$store_price        = get_post_meta(8,'store_price',true);
$cta_buttontext     = get_post_meta(8, 'cta_buttontext', true);

?>

<!-- HERO
=================================================================================-->
<section id="hero" data-type="background" data-speed="1.5">
    <article>
        <div class="container clearfix">
            <div class="row">
                <div class="col-sm-5">
                    <img src="<?php bloginfo('template_directory');?>/assets/img/logo-badge4.png" alt="EasyMode.io" class="logo">
                </div>
                <div class="col-sm-7 hero-text">
                    <h1><?php bloginfo('name'); ?></h1>
                    <p class="lead"><?php bloginfo('description'); ?></p>
                    <div id="price-timeline">
                        <div class="price active" onClick="$('.price').removeClass('active'); $(this).addClass('active');">
                            <h4>Landing Page<small>Basic</small></h4>
                            <span><?php echo $landingpage_price; ?></span>
                        </div>
                        <div class="price" onClick="$('.price').removeClass('active'); $(this).addClass('active');">
                            <h4>Custom Site<small>Business</small></h4>
                            <span><?php echo $customsite_price; ?></span>
                        </div>
                        <div class="price" onClick="$('.price').removeClass('active'); $(this).addClass('active');">
                            <h4>Online Store<small>Enterprise</small></h4>
                            <span><?php echo $store_price; ?></span>
                        </div>
                    </div>
                    <p><a class="btn btn-lg btn-danger" href="<?php echo site_url(); ?>/signup" role="button"><?php echo $cta_buttontext; ?></a></p>
                </div>
            </div>
        </div>
    </article>
</section>
