<?php get_header();
if (have_posts()): $i = 0;
    while (have_posts()): the_post();
        $category_Name = get_the_category()[0]->name;
        // Get the ID of a given category
//        var_dump($category_Name);exit;
        $category_id = get_cat_ID($category_Name);

        // Get the URL of this category
        $category_link = get_category_link($category_id);
//        var_dump($category_Name,$category_id,$category_link);exit;
        ?>


        <div class="detail-page">
            <div class="section" id="packages">
                <section id="ps-container" class="ps-container">

                    <div class="ps-header">

                        <h1>
                            <a href="<?php echo get_home_url() ?>">
                                <img src="<?php echo get_template_directory_uri()?>/images/logo-EGC-04.png" alt="fullPage" class="logo width-100px"/>
                            </a>
                            <a class=" btn white secondary-content waves-effect waves-white btn-egc btn-back"
                               href="<?php echo esc_url($category_link); ?>">
                                <i class="material-icons">keyboard_arrow_left</i>
                            </a>
                        </h1>
                    </div>
                    <!-- /ps-header -->

                    <div class="ps-contentwrapper data-section">
                        <!-- INTERNET -->
                        <div class="ps-content">

                            <h2>  <?php echo $category_Name ?></h2>

                            <div class="row">
                                <div id="test1" class="" data-indicators="true">

                                    <div class=" ">
                                        <div class="col s12 m12 bordered padding-15">
                                            <span class="title bold">
                                              <?php the_title() ?>
                                            </span>

                                            <div class="divider"></div>
                                            <div class="col s12 m8 desc">
                                                <div class="margin-bottom" >
                                                    <?php the_content() ?>
                                                </div>
                                                <!--                                            <span class="new badge egc">Data Transfer Download 75Gb</span>-->
                                            </div>
                                            <div class="col s12 m4">
                                                <div class="col s12 m12 side-sec ps-price">
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

                                                <div class="col s12 m12 bordered side-sec pay-now">
                                                      <span class="title bold">
                                                        <?php pll_e('payment');?>
                                                      </span>
                                                      <div class="divider"></div>
                                                      <span class="">
                                                        <?php echo do_shortcode('[livesite-pay label="subscribe now" payment_amount="10" title="buy now" class="btn-pay" show_icons]')?>
                                                      </span>

                                                </div>
                                                <div class="col s12 m12 bordered side-sec">
                                                  <span class="title bold">
                                                    <?php pll_e('tags');?>
                                                  </span>
                                                    <div class="divider"></div>
                                                    <?php $tags=get_the_tags();
                                                    if($tags)
                                                    {
                                                        foreach($tags as $tag)
                                                        {
                                                            ?>
                                                            <a href="<?php echo get_tag_link($tag); ?>" class="chip egc-color">
                                                                <?php echo $tag->name; ?>
                                                            </a>
                                                            <?php
                                                        }
                                                    }
                                                    ?>

                                                </div>

                                                <div class="col s12 m14 bordered side-sec category">
                                                      <span class="title bold">
                                                        <?php pll_e('categories');?>
                                                      </span>

                                                    <div class="divider"></div>
                                                    <ul class="list-category">
                                                        <?php
                                                        $categories = get_categories( array(
                                                            'orderby' => 'name',
                                                        ) );

                                                        foreach ( $categories as $category ) {
                                                            ?>
                                                            <li>
                                                                <a href="<?php  echo esc_url( get_category_link( $category->term_id ) );?>">
                                                                   <?php echo esc_html( $category->name );?>
                                                                </a>
                                                            </li>




                                                            <?php
                                                        }
                                                        ?>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
        $i++;
    endwhile;
endif; ?>
<?php get_footer() ?>