<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 7/7/17
 * Time: 1:56 PM
 */
get_header() ;
if(have_posts()):
    while(have_posts()):the_post();?>
    <div id="">
        <div class="section padding-bottom-none" style="    min-height: 88vh;">
                <h1>
                    <a href="<?php echo get_home_url() ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/images/logo-EGC-04.png" alt="fullPage"
                             class="logo width-100px"/>
                    </a>
                </h1>
            <div class="padding-15" id="about">
                <h1><?php the_title();?></h1>
                <div class="divider-about"></div>
                <div class="container align-left">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </div>

<?php
    endwhile;
endif;
get_footer(); ?>