<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package egc
 */

get_header(); ?>

    <div class="desc-page">
        <div class="section" id="packages">
            <section id="ps-container" class="ps-container">

                <div class="ps-header">

                    <h1>
                        <a href="<?php echo get_home_url() ?>">
                            <img src="<?php echo get_template_directory_uri() ?>/images/logo-EGC-04.png" alt="fullPage"
                                 class="logo width-100px"/>
                        </a>
                    </h1>
                </div>
                <!-- /ps-header -->

                <div class="ps-contentwrapper data-section">
                    <!-- INTERNET -->
                    <div class="ps-content">
                        <h2><?php the_archive_title() ?></h2>

                        <div class="row">
                            <div id="test1" class="" data-indicators="true">
                                <?php
                                if (have_posts()): $i = 0;
                                    while (have_posts()): the_post();

                                        ?>


                                            <div class=" ">
                                                <div class="col s12 m6 bordered padding-15">
                                                  <span class="title bold">
                                                      <?php the_title() ?>
                                                  </span>

                                                    <div class="divider"></div>
                                                    <div class="col s12 m4 ps-price">
                                                      <span class="col s6 m12 font-12">
                                                          <?php if(get_post_meta(get_the_ID(),'price_before',true)){ ?>
                                                         <del>
                                                        <span class="block font-12">
                                                            $<?php echo get_post_meta(get_the_ID(),'price_before',true)?>/ <?php pll_e('month');?>
                                                        </span>
                                                         </del>
                                                         <?php }?>
                                                    <strong class="block font-25 text-blue">
                                                        $<?php echo get_post_meta(get_the_ID(),'price_after',true)?>
                                                        <span class="text-blue">/ <?php pll_e('month');?> </span>
                                                    </strong>
                                                      </span>

                                                        <div class="col s6 m12 ps-price speed border-top">
                                            <span class="number-big">
                                                <?php echo get_post_meta(get_the_ID(),'speed',true)?>
                                              <strong class=" font-25 line-height">
                                                  Mbps
                                              </strong>
                                            </span>
                                            <span class="font-12">
                                              <span class="block line-height-12"> <?php pll_e('download_speed');?></span>
                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col s12 m8 desc">
                                                        <div class="margin-bottom">
                                                           <?php the_excerpt()?>
                                                        </div>
<!--                                                        <span class="new badge egc">Data Transfer Download 75Gb</span>-->
                                                        <a class="btn-egc" href="<?php echo get_permalink(get_the_ID()); ?>">
                                                            <?php pll_e('more_details');?>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                <?php
                                        $i++;
                                    endwhile;
                                endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /ps-contentwrapper -->

            </section>
            <!-- /ps-container -->
        </div>
    </div>

<?php
get_footer();
?>