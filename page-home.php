<?php
    /*
        Template Name: Home Page
    */

    get_header();

    get_template_part('template-parts/content','hero');
    get_template_part('template-parts/content','optin');
    get_template_part('template-parts/content','boost');
    get_template_part('template-parts/content','discovery');
    get_template_part('template-parts/content','websitefeatures');
    get_template_part('template-parts/content','featurette');
    get_template_part('template-parts/content','webperson');
    get_template_part('template-parts/content','testimonials');

    get_footer(); 
?>