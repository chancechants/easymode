<?php
    $checklist_image     = get_field('checklist_image');    
    $checkist_title      = get_field('checklist_title'); 
    $checklist_body      = get_field('checklist_body'); 
?>

<!-- DISCOVERY
=================================================================================-->        
<section id="discovery">
    <div class="container">
        <div class="section-header">
            <?php if (!empty($checklist_image)) : ?>
                <img src="<?php echo $checklist_image['url'];?>" alt="<?php echo $checklist_image['alt'];?>">
            <?php endif; ?>
            <h2><?php echo $checkist_title; ?></h2>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2"><?php echo $checklist_body; ?></div>
        </div>
    </div>
</section>