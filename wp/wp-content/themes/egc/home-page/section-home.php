<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 5/6/17
 * Time: 8:00 PM
 */
?>
<div class="section " id="home">
    <div class="mouse-container">
        <a href="#packages">
            <div class="mouse">
                <span class="scroll-down"></span>
            </div>
        </a>
    </div>
    <!-- particles.js container -->
    <!-- <div class="overlay"></div> -->
    <div id="particles-js"></div>
    <div class="content-after-particles">
        <img src="<?php echo get_template_directory_uri()?>/images/logo-EGC-04.png" alt="fullPage" class="logo"/>

        <div class="hint">
            <div class="wrap">
                <div class="type-wrap">
                    <div id="typed-strings">
                        <p><?php pll_e('egc_slogan');?></p>
                    </div>
                    <span id="typed" style=""></span>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="">
            <?php
            $categories = get_terms(
                'category',
                array('parent' => 0)
            );


            foreach ( $categories as $i=>$category ) {
                ?>

                    <a href="<?php  echo esc_url( get_category_link( $category->term_id ) );?>" style="color: #ffffff;text-decoration: underline">
                        <?php echo esc_html( $category->name );?>

                    </a>
                   <?php if( $i<(count($categories)-1)||$i==0 ){?>
                    <span style="color: #fff "> ,</span>

            <?php
            }
            }
            ?>

        </div>

    </div>
</div>
