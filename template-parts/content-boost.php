<?php
    // Advanced Custom Fields
    $site_growth_image   = get_field('site_growth_image');
    $site_growth_title   = get_field('site_growth_title');
    $site_growth_desc    = get_field('site_growth_description');
    $reason_1_title      = get_field('reason_1_title');
    $reason_1_desc       = get_field('reason_1_description');
    $reason_2_title      = get_field('reason_2_title');
    $reason_2_desc       = get_field('reason_2_description');
?>
<!-- BOOST YOUR SEARCH ENGINE RESULTS
=================================================================================-->        
<section>
    <div class="container">
        <div class="section-header">
            <?php if(!empty($site_growth_image)) : ?>
                <img src="<?php echo $site_growth_image['url']; ?>" alt="<?php echo $site_growth_image['alt'] ?>">
            <?php endif; ?>
            
            <h2><?php echo $site_growth_title; ?></h2>
        </div>
        <p class="lead"><?php echo $site_growth_desc; ?></p>
        <div class="row">
            <div class="col-sm-6">
                <h3><?php echo $reason_1_title; ?></h3>
                <p><?php echo $reason_1_desc; ?></p>
            </div>
            <div class="col-sm-6">
                <h3><?php echo $reason_2_title; ?></h3>
                <p><?php echo $reason_2_desc; ?></p> 
            </div>                    
        </div>
    </div>
</section>