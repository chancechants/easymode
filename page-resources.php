<?php
    /* 
        Template Name: Resources Page 
    */
    get_header();
?>

    <!-- RESOURCES PARALLAX -->
    <section class="featurette2" data-name="featurette2" data-type="background" data-speed="2">
        <h1 class="page-title">Resources</h1>
    </section>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="row" id="primary">
            <div id="content" class="col-sm-12">
                <section class="main-content">
                    <p class="lead">Welcome to the <span class="orange"><strong>EASYMODE</strong></span> resources page! These platforms, services and tools have provided me immeasurable value over the years and are so good that I would pass the word along. These vendors and the software/services they provide are what help me make websites on easy mode.</p>

                    <p><em>Please keep in mind that some of the following resources are my affiliate links, and should you decide to make a purchase, I will earn a small commission &mdash; at no extra cost to you! I am recommending these resources only because I have found them to be incredibly helpful. Don&rsquo;t spend your money on any products or resources unless you think they will benefit you.</em></p>

                    <hr>
                    <div class="resource-row clearfix">
                        <div class="resource">
                            <a href="https://m.do.co/c/5fecfee30e15" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/digitalocean.png" alt="DigitalOcean"></a>
                            <h3><a href="https://m.do.co/c/5fecfee30e15" target="_blank">DigitalOcean</a></h3>
                            <p>SSD Virtual Private Servers starting at $5? You had me at SSD. I've been a DO admin for the past 3 years and they have never let me down. Truly a 99.99% uptime service. You can scale all of your servers up easily and turn on back-ups or snapshots with a push of a button or spin up a new instance to try out a new server config or platform for a few hours for less than a dollar.</p>
                            <a href="https://m.do.co/c/5fecfee30e15" target="_blank" class="btn btn-success">Get DigitalOcean &raquo;</a>
                        </div>

                        <div class="resource">
                            <a href="https://www.visualstudio.com" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/visualstudio.png" alt="Visual Studio"></a>
                            <h3><a href="https://www.visualstudio.com" target="_blank">Visual Studio</a></h3>
                            <p>Microsoft has come a long way, their Edge browser is ahead of Chrome in some benchmarks and they've opened up ASP.NET Core to Mac/Unix environments. <br/><br/><a href="https://www.visualstudio.com/vs/community/" target="_blank">Visual Studio 2015 Community Edition</a> and <a href="https://code.visualstudio.com/" target="_blank">Visual Studio Code</a> are FREE development environments provided by Microsoft and it's really worth checking out. This entire site was created in Visual Studio Code. For projects big or small I highly recommend checking them out.</p>
                            <a href="https://www.visualstudio.com" target="_blank" class="btn btn-success">Check out Visual Studio &raquo;</a>
                        </div>

                        <div class="resource">
                            <a href="https://www.udemy.com" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/udemy.gif" alt="udemy" width="342" height="200"></a>
                            <h3><a href="https://www.udemy.com" target="_blank">Udemy</a></h3>
                            <p>I am enrolled in <a href="https://www.udemy.com/user/aaronrosario/?subscribed_course=1&key=subscribed_courses" target="_blank">109</a> courses on Udemy. Not all of their courses are perfect but if you read the reviews you will find some them to be extremely high quality and affordable (most of my courses were $10 during sales).</p>
                            <a href="https://www.udemy.com" target="_blank" class="btn btn-success">Check out Udemy &raquo;</a>
                        </div>                                         
                    </div>            
                </section>
            </div>
        </div>
    </div>

<?php get_footer(); ?>