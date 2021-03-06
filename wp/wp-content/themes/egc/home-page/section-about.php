<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 5/6/17
 * Time: 8:11 PM
 */
$lang=pll_current_language();
$post_id=145;
if($lang=="fr")
{
    $post_id=147;
}
$post=get_post($post_id);
?>
<div class="section display-non" id="about">
    <div class="content-after-particles">
        <i class="icon fa fa-4x fa-info-circle"></i>
        <h1><?php echo $post->post_title;?></h1>
        <div class="divider-about"></div>
        <div class="align-left overflow-hidden">
            <?php echo $post->post_content;?>
        </div>
        <div class="_3dots"></div>
        <a href="<?php echo get_page_link($post_id); ?>" class="right  more-text">
            <?php pll_e('more_details');?>
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </a>
    </div>
</div>