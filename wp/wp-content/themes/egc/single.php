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


        <div id="detail-page">
            <div class="section" id="packages">
                <section id="ps-container" class="ps-container">

                    <div class="ps-header">

                        <h1>
                            <a class=" btn white secondary-content waves-effect waves-white btn-egc btn-back home"
                               href="<?php echo get_home_url() ?>">
                                <i class="material-icons">home</i>
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

                            <h2>  <?php the_category(); ?></h2>

                            <div class="row">
                                <div id="test1" class="" data-indicators="true">

                                    <div class=" ">
                                        <div class="col s12 m12 bordered padding-15">
                                            <span class="title bold">
                                              <?php the_title() ?>
                                            </span>

                                            <div class="divider"></div>
                                            <div class="col s12 m8 desc">
                                                <div class="margin-bottom" style="color: #000000 !important;">
                                                    <?php the_content() ?>
                                                </div>
                                                <!--                                            <span class="new badge egc">Data Transfer Download 75Gb</span>-->
                                            </div>
                                            <div class="">
                                                <div class="col s12 m4 side-sec ps-price">
                                                <span class="col s6 m12 font-12">
                                                    <strong class="block font-25 text-blue">$<?php get_post_meta(the_ID(),'price_before')?></strong>
                                                    Starting from
                                                </span>

                                                    <div class="col s6 m12 ps-price speed border-top">
                              <span class="number-big">5
                                <strong class=" font-25 line-height">
                                    Mbps
                                </strong>
                              </span>
                              <span class="font-12">
                                <span class="block line-height-12"> Download Speed</span>
                              </span>
                                                    </div>
                                                </div>

                                                <div class="col s12 m4 bordered side-sec pay-now">
                          <span class="title bold">
                            payment
                          </span>

                                                    <div class="divider"></div>
                          <span class="">
                            # pay-now section
                          </span>

                                                </div>

                                                <div class="col s12 m4 bordered side-sec">
                          <span class="title bold">
                            Tags
                          </span>

                                                    <div class="divider"></div>
                                                    <a href="#" class="chip egc-color">
                                                        internet
                                                    </a>
                                                    <a href="#" class="chip egc-color">
                                                        phone
                                                    </a>
                                                    <a href="#" class="chip egc-color">
                                                        internet & phone
                                                    </a>
                                                    <a href="#" class="chip egc-color">
                                                        Tag
                                                    </a>
                                                </div>

                                                <div class="col s12 m4 bordered side-sec category">
                          <span class="title bold">
                            Categories
                          </span>

                                                    <div class="divider"></div>
                                                    <ul class="list-category">
                                                        <li><a href="#">internet</a></li>
                                                        <li><a href="#">phone</a></li>
                                                        <li><a href="#">internet & phone</a></li>
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