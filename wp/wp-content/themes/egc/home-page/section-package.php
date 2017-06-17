<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 5/6/17
 * Time: 8:11 PM
 */
$categories = get_categories();
$result = [];
?>
<div class="section" id="packages">
    <section id="ps-container" class="ps-container">

        <div class="ps-header">
            <h1>PRICING</h1>
        </div>
        <!-- /ps-header -->

        <div class="ps-contentwrapper">
            <!-- INTERNET -->
            <?php
            foreach ($categories as $category) {
                $args = array(
                    'post_type' => 'packages',
                    'cat' => $category->term_id
                );

                 $packages= new WP_Query( $args );
                ?>
                <div class="ps-content">
                    <a href="<?php echo esc_url(get_category_link($category->term_id));?>">
                        <h2><?php echo esc_html($category->name);?></h2>
                    </a>

                    <div class="row">
                        <div id="test1" class="slick-packages center" data-indicators="true">
                            <?php if ($packages->have_posts()):
                                while ($packages->have_posts()):$packages->the_post();?>
                                    <div class="item">
                                        <div class="col s12 m12 bordered padding-15">
                                            
                                             
                                             <div class="col s12 m12 ps-price">
                                                  <span class="col s6 m6 font-12">
                                                     <?php if (get_post_meta(get_the_ID(), 'price_before', true)) { ?>
                                                         <del>
                                                                        <span class="block font-12">
                                                                            $<?php echo get_post_meta(get_the_ID(), 'price_before', true) ?>
                                                                            / month
                                                                        </span>
                                                         </del>
                                                     <?php }?>
                                                      <strong class="block font-25 text-blue">
                                                          $<?php echo get_post_meta(get_the_ID(), 'price_after', true)?>
                                                          <span class="text-blue">/ month </span>
                                                      </strong>

                                                  </span>
                                                  <div class="col s6 m6 ps-price speed border-top">
                                                        <span class="number-big">
                                                            <?php echo get_post_meta(get_the_ID(),'speed',true)?>
                                                          <strong class=" font-25 line-height">
                                                              Mbps
                                                          </strong>
                                                        </span>
                                                        <span class="font-12">
                                                          <span class="block line-height-12"> Download Speed</span>
                                                        </span>
                                                  </div>
                                            </div>
                                             <span class="title bold">
                                                 <?php the_title() ?>
                                             </span>
                                             <div class="divide"></div>
                                            <div class="col s12 m12 desc">
                                                <span class="new badge egc"> 75Gb</span>
                                                <a class="btn-egc" href="detail.html">
                                                    More Details
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                            endif;
                            ?>
                        </div>

                    </div>

                </div>
            <?php
            } ?>
        </div>
        <!-- /ps-contentwrapper -->

        <div class="ps-slidewrapper">
            <div class="ps-slides">
                <?php foreach ($categories as $i=>$category) {?>
                    <div class="bg-<?php echo $i+1;?>">
                        <i class="material-icons icon-pricing">
                            <?php echo $category->term_font_icon?>
                        </i>
                    </div>
                <?php
                } ?>
            </div>
            <nav>
                <a href="#" class="ps-prev"></a>
                <a href="#" class="ps-next"></a>
            </nav>
        </div>
        <!-- /ps-slidewrapper -->

    </section>
    <!-- /ps-container -->
</div>
<?php  wp_reset_postdata();?>