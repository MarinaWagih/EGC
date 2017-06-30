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
        <div class="content-after-particles">
            <h1><?php pll_e('planes');?></h1>
            <div class="divider-about"></div>
            <div class="collection">
                <?php foreach ($categories as $i=>$category) {?>

                        <a href="<?php  echo esc_url( get_category_link( $category->term_id ) );?>" class="collection-item">
<!--                            <i class="material-icons icon-pricing">-->
<!--                                --><?php //echo $category->term_font_icon?>
<!--                            </i>-->
                            <?php echo esc_html( $category->name );?>
                        </a>

                <?php
                } ?>

            </div>
        </div>
    </div>
