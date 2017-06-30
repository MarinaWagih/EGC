<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 5/6/17
 * Time: 8:11 PM
 */
$categories = get_terms(
    'category',
    array('parent' => 0)
);
?>
<div class="section" id="packages">
    <section id="ps-container" class="ps-container">

        <div class="ps-header">
            <h1><?php pll_e('planes');?></h1>
        </div>
        <!-- /ps-header -->

        <div class="ps-contentwrapper">
            <!-- INTERNET -->
            <div class="ps-content">
                <!--<a href="desc.html">
                  <h2>INTERNET</h2>
                </a>-->
                <div class="row">

                    <div id="test1" class="center">
                        <?php foreach ($categories as $i=>$category) {?>
                            <div class="" href="#one!">
                                <div class="col s12 m12 bordered">
                                    <div class="col s12 m12">
                                        <a href="<?php  echo esc_url( get_category_link( $category->term_id ) );?>" class="planes-link">
                                          <span class="title bold">
                                                <?php echo esc_html( $category->name );?>
                                         </span>
                                        </a>

                                    </div>

                                </div>
                            </div>

                        <?php
                        } ?>
                    </div>

                </div>

            </div>


        </div>

    </section>
    <!-- /ps-container -->
</div>