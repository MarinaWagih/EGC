<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 7/9/17
 * Time: 8:21 PM
 */
?>
<div class=" ">
    <div class="col s12 m12 bordered padding-15">
                                                  <span class="title bold">
                                                      <?php the_title() ?>
                                                  </span>

        <div class="divider"></div>
        <div class="col s12 m4 ps-price">
                                                      <span class="col s6 m12 font-12 min-height-80px <?php echo (get_post_meta(get_the_ID(),'price_before',true))?"":"vertical-align" ?>">
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
                <br>
                <?php the_category(',')?>
            </div>
            <!--                                                        <span class="new badge egc">Data Transfer Download 75Gb</span>-->
            <a class="btn-egc" href="<?php echo get_permalink(get_the_ID()); ?>">
                <?php pll_e('more_details');?>
            </a>
        </div>
    </div>
</div>