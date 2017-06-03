<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 5/6/17
 * Time: 8:11 PM
 */
?>
<div class="section" id="about">
    <div class="content-after-particles">
        <i class="icon fa fa-4x fa-info-circle"></i>
        <h1><?php echo get_option('about_title');?></h1>
        <div class="divider-about"></div>
        <p>
            <?php echo get_option('about_content');?>
        </p>
    </div>
</div>