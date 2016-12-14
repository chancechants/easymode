<?php 
    $built_with_title = get_field('built_with_title');
    $built_with_body = get_field('built_with_body');
?>
<!-- PROJECT FEATURES
=================================================================================-->        
<section class="code-features">
    <div class="container">
    
        <h2><?php echo $built_with_title; ?></h2>
        <p class="lead"><?php echo $built_with_body; ?></p>
        
        <div class="row">
            <?php $loop = new WP_Query(array('post_type' => 'built_with_feature', 'orderby' => 'post_id', 'order' => 'ASC'));?>
            <?php while($loop->have_posts()) : $loop->the_post(); ?>
            <div class="col-sm-4">
                <?php
                    if (has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } 
                ?>
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            </div>
            <?php endwhile; ?>           
        </div>
        
    </div>
</section>