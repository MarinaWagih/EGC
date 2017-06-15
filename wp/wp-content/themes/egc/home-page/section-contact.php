<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 5/6/17
 * Time: 8:12 PM
 */
?>
<div class="section" id="contact">
<?php //echo do_shortcode('[livesite-pay label="Pay Now" payment_amount="10" title="buy now" class="btn-pay" show_icons]')?>
    <div class="row">
        <div class="col s12 m12">
            <div class="col s12 m3 image-about"></div>
            <div class="col s12 m9 contact-data">
                <div class="title-contact">
                    <i class="material-icons font-45 icon-egc">person_pin</i>
                    <h1><?php pll_e('contact_us_title');?></h1>
                    <div class="divider-about"></div>
                </div>
                <div class="row">
                    <div class="col s12 m3">
                        <div class="center promo promo-example">
                            <i class="material-icons icon-contact">phone</i>
                            <p class="promo-caption titles"><?php pll_e('Phone');?></p>
                            <?php $phones=explode(',',get_option('phones'));
                            foreach($phones as $phone)
                            {
                                ?>
                                <a href="tel:<?php echo $phone?>"><?php echo $phone?></a>
                                <br>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="center promo promo-example">
                            <i class="material-icons icon-contact">room</i>
                            <p class="promo-caption titles"><?php pll_e('address');?></p>
                            <address>
                                <?php echo get_option('address')?>
                            </address>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="center promo promo-example">
                            <i class="material-icons icon-contact">email</i>
                            <p class="promo-caption titles"><?php pll_e('email');?></p>
                            <a href="mailto:<?php echo get_option('email')?>"><?php echo get_option('email')?></a>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="center promo promo-example">
                            <i class="material-icons icon-contact">print</i>
                            <p class="promo-caption titles"><?php pll_e('fax');?></p>
                            <?php $faxes=explode(',',get_option('fax'));
                            foreach($faxes as $fax)
                            {
                                ?>
                                <a href="fax:<?php echo $fax?>"><?php echo $fax?></a>
                                <br>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>