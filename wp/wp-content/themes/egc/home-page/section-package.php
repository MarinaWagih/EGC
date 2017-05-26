<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 5/6/17
 * Time: 8:11 PM
 */
$categories=['cable','dsl','internet-and-phone','phone'];
$result=[];
foreach($categories as $category)
{
    $args = array(
        'post_type' => 'packages',
        'taxonomy_name' => $category
    );

    $result[$category] = query_posts($args);
}
wp_reset_query();

?>
<div class="section" id="packages">
    <section id="ps-container" class="ps-container">

        <div class="ps-header">
            <h1>PRICING</h1>
        </div>  <!-- /ps-header -->

        <div class="ps-contentwrapper">
            <!-- INTERNET -->
            <div class="ps-content">
                <h2>INTERNET</h2>
                <div class="row">
                    <div class="col s12 padding-5">
                        <ul class="tabs tabs-fixed-width border">
                            <li class="tab col s3"><a class="active" href="#test1">  CABLE </a></li>
                            <li class="tab col s3"><a href="#test2">DSL/FTTN</a></li>
                        </ul>
                    </div>
                    <div id="test1" class="carousel carousel-slider center" data-indicators="true">
                        <div class="carousel-item" href="#one!">
                            <div class="col s12 m12 bordered padding-15">
                          <span class="title bold">
                            Internet Basic 5
                          </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                              <span class="col s6 font-12">
                                  <strong class="block font-25">$24.99/M</strong>
                                  Starting from
                              </span>
                                    <div class="col s6 m12 ps-price speed border-top">
                                <span class="number-big">5
                                  <strong class=" font-25 line-height">
                                      Mbps
                                  </strong>
                                </span>
                                <span class="font-12">
                                  <span class="block"> Download Speed</span>
                                </span>
                                    </div>
                                </div>

                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Yearly payment required Do you
                                        like sending emails to your friends
                                        and surfing the Internet on ...
                                    </p>
                                    <div class="chip-tag">
                                        Data Transfer Download 75Gb
                                        <!-- <i class="close material-icons">close</i> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" href="#two!">
                            <div class="col s12 m12 bordered padding-15">
                           <span class="title bold">
                             Internet 10
                           </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                              <span class="col s6 font-12">
                                  <strong class="block font-25">$34.99/M</strong>
                                  Starting from
                              </span>
                                    <div class="col s6 m12 ps-price speed border-top">
                                <span class="number-big">10
                                  <strong class=" font-25 line-height">
                                      Mbps
                                  </strong>
                                </span>
                                <span class="font-12">
                                  <span class="block"> Download Speed</span>
                                </span>
                                    </div>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        The ideal speed for downloading small
                                        files, surfing the Internet,
                                        exchanging pictures by email and...
                                    </p>
                                    <div class="chip-tag">
                                        Data Transfer Download 200Gb
                                        <!-- <i class="close material-icons">close</i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#three!">
                            <div class="col s12 m12 bordered padding-15">
                          <span class="title bold">
                            Internet 15 Plus
                          </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                              <span class="col s6 font-12">
                                  <strong class="block font-25">$39.99/M</strong>
                                  Starting from
                              </span>
                                    <div class="col s6 m12 ps-price speed border-top">
                                <span class="number-big">15
                                  <strong class=" font-25 line-height">
                                      Mbps
                                  </strong>
                                </span>
                                <span class="font-12">
                                  <span class="block"> Download Speed</span>
                                </span>
                                    </div>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Quickly download medium sized files,
                                        music, pictures, and funny clips!
                                        Search the Internet
                                    </p>
                                    <div class="chip-tag">
                                        Data Transfer Download 200Gb
                                        <!-- <i class="close material-icons">close</i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#four!">
                            <div class="col s12 m12 bordered padding-15">
                          <span class="title bold">
                            High Speed 20
                          </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                              <span class="col s6 font-12">
                                  <strong class="block font-25">$44.99/M</strong>
                                  Starting from
                              </span>
                                    <div class="col s6 m12 ps-price speed border-top">
                                <span class="number-big">20
                                  <strong class=" font-25 line-height">
                                      Mbps
                                  </strong>
                                </span>
                                <span class="font-12">
                                  <span class="block"> Download Speed</span>
                                </span>
                                    </div>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Free up your telephone line and surf faster.
                                        Stay permanently connected. Do you like
                                    </p>
                                    <div class="chip-tag">
                                        Data Transfer Download 200Gb
                                        <!-- <i class="close material-icons">close</i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#five!">
                            <div class="col s12 m12 bordered padding-15">
                          <span class="title bold">
                            High Speed 30
                          </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                              <span class="col s6 font-12">
                                <del class="text-blue" class="text-blue" class="text-blue"><strong class="block font-25">$64.99/M</strong></del>
                                Limited Time Offer!
                                  <strong class="block font-25">$49.99/M</strong>
                                  Starting from
                              </span>
                                    <div class="col s6 m12 ps-price speed border-top">
                                <span class="number-big">30
                                  <strong class=" font-25 line-height">
                                      Mbps
                                  </strong>
                                </span>
                                <span class="font-12">
                                  <span class="block"> Download Speed</span>
                                </span>
                                    </div>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        If you love listening songs, watching videos,
                                        connecting with your friends on social media
                                    </p>
                                    <div class="chip-tag">
                                        Data Transfer Unlimited
                                        <!-- <i class="close material-icons">close</i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#six!">
                            <div class="col s12 m12 bordered padding-15">
                          <span class="title bold">
                            Extreme High Speed 60 Plus
                          </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                              <span class="col s6 font-12">
                                <del class="text-blue" class="text-blue" class="text-blue" class="text-blue"><strong class="block font-25">$79.99/M</strong></del>
                                Limited Time Offer!
                                  <strong class="block font-25">$59.99/M</strong>
                                  Starting from
                              </span>
                                    <div class="col s6 m12 ps-price speed border-top">
                                <span class="number-big">60
                                  <strong class=" font-25 line-height">
                                      Mbps
                                  </strong>
                                </span>
                                <span class="font-12">
                                  <span class="block"> Download Speed</span>
                                </span>
                                    </div>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Passionate about HD movies,
                                        games and music and want to
                                        download your heart’s
                                    </p>
                                    <div class="chip-tag">
                                        Data Transfer Unlimited
                                        <!-- <i class="close material-icons">close</i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#seven!">
                            <div class="col s12 m12 bordered padding-15">
                          <span class="title bold">
                          Ultimate High Speed 120
                          </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                              <span class="col s6 font-12">
                                <del class="text-blue" class="text-blue" class="text-blue"><strong class="block font-25">$99.99/M</strong></del>
                                Limited Time Offer!
                                  <strong class="block font-25">$69.99/M</strong>
                                <span class="bold">Starting from</span>
                              </span>
                                    <div class="col s6 m12 ps-price speed border-top">
                                <span class="number-big">120
                                  <strong class=" font-25 line-height">
                                      Mbps
                                  </strong>
                                </span>
                                <span class="font-12">
                                  <span class="block"> Download Speed</span>
                                </span>
                                    </div>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Experience the internet at full and fastest
                                        speed! Download whatever you want in record
                                    </p>
                                    <div class="chip-tag">
                                        Data Transfer Unlimited
                                        <!-- <i class="close material-icons">close</i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#eight!">
                            <div class="col s12 m12 bordered padding-15">
                          <span class="title bold">
                          Platinum High Speed 200
                          </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                              <span class="col s6 font-12">
                                <del class="text-blue" class="text-blue" class="text-blue" class="text-blue"><strong class="block font-25">$119.99/M</strong></del>
                                Limited Time Offer!
                                  <strong class="block font-25">$99.99/M</strong>
                                <span class="bold">Starting from</span>
                              </span>
                                    <div class="col s6 m12 ps-price speed border-top">
                                <span class="number-big">200
                                  <strong class=" font-25 line-height">
                                      Mbps
                                  </strong>
                                </span>
                                <span class="font-12">
                                  <span class="block"> Download Speed</span>
                                </span>
                                    </div>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Enjoy our fastest Internet access
                                        with no speed limit! You can download movies and
                                    </p>
                                    <div class="chip-tag">
                                        Data Transfer Unlimited
                                        <!-- <i class="close material-icons">close</i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="test4" class="carousel carousel-slider center" data-indicators="false">
                        <div class="carousel-item" href="#one!">
                            <div class="col s12 m12 bordered padding-15">
                          <span class="title bold">
                            Internet Basic 5
                          </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                              <span class="col s6 font-12">
                                  <strong class="block font-25">$24.99/M</strong>
                                  Starting from
                              </span>
                                    <div class="col s6 m12 ps-price speed border-top">
                                <span class="number-big">5
                                  <strong class=" font-25 line-height">
                                      Mbps
                                  </strong>
                                </span>
                                <span class="font-12">
                                  <span class="block"> Download Speed</span>
                                </span>
                                    </div>
                                </div>

                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Yearly payment required Do you
                                        like sending emails to your friends
                                        and surfing the Internet on ...
                                    </p>
                                    <div class="chip-tag">
                                        Data Transfer Download 75Gb
                                        <!-- <i class="close material-icons">close</i> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" href="#two!">
                            <div class="col s12 m12 bordered padding-15">
                           <span class="title bold">
                             Internet 10
                           </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                              <span class="col s6 font-12">
                                  <strong class="block font-25">$34.99/M</strong>
                                  Starting from
                              </span>
                                    <div class="col s6 m12 ps-price speed border-top">
                                <span class="number-big">10
                                  <strong class=" font-25 line-height">
                                      Mbps
                                  </strong>
                                </span>
                                <span class="font-12">
                                  <span class="block"> Download Speed</span>
                                </span>
                                    </div>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        The ideal speed for downloading small
                                        files, surfing the Internet,
                                        exchanging pictures by email and...
                                    </p>
                                    <div class="chip-tag">
                                        Data Transfer Download 200Gb
                                        <!-- <i class="close material-icons">close</i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#three!">
                            <div class="col s12 m12 bordered padding-15">
                          <span class="title bold">
                            Internet 15 Plus
                          </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                              <span class="col s6 font-12">
                                  <strong class="block font-25">$39.99/M</strong>
                                  Starting from
                              </span>
                                    <div class="col s6 m12 ps-price speed border-top">
                                <span class="number-big">15
                                  <strong class=" font-25 line-height">
                                      Mbps
                                  </strong>
                                </span>
                                <span class="font-12">
                                  <span class="block"> Download Speed</span>
                                </span>
                                    </div>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Quickly download medium sized files,
                                        music, pictures, and funny clips!
                                        Search the Internet
                                    </p>
                                    <div class="chip-tag">
                                        Data Transfer Download 200Gb
                                        <!-- <i class="close material-icons">close</i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#four!">
                            <div class="col s12 m12 bordered padding-15">
                          <span class="title bold">
                            High Speed 20
                          </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                              <span class="col s6 font-12">
                                  <strong class="block font-25">$44.99/M</strong>
                                  Starting from
                              </span>
                                    <div class="col s6 m12 ps-price speed border-top">
                                <span class="number-big">20
                                  <strong class=" font-25 line-height">
                                      Mbps
                                  </strong>
                                </span>
                                <span class="font-12">
                                  <span class="block"> Download Speed</span>
                                </span>
                                    </div>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Free up your telephone line and surf faster.
                                        Stay permanently connected. Do you like
                                    </p>
                                    <div class="chip-tag">
                                        Data Transfer Download 200Gb
                                        <!-- <i class="close material-icons">close</i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#five!">
                            <div class="col s12 m12 bordered padding-15">
                          <span class="title bold">
                            High Speed 30
                          </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                              <span class="col s6 font-12">
                                <del class="text-blue" class="text-blue" class="text-blue"><strong class="block font-25">$64.99/M</strong></del>
                                Limited Time Offer!
                                  <strong class="block font-25">$49.99/M</strong>
                                  Starting from
                              </span>
                                    <div class="col s6 m12 ps-price speed border-top">
                                <span class="number-big">30
                                  <strong class=" font-25 line-height">
                                      Mbps
                                  </strong>
                                </span>
                                <span class="font-12">
                                  <span class="block"> Download Speed</span>
                                </span>
                                    </div>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        If you love listening songs, watching videos,
                                        connecting with your friends on social media
                                    </p>
                                    <div class="chip-tag">
                                        Data Transfer Unlimited
                                        <!-- <i class="close material-icons">close</i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#six!">
                            <div class="col s12 m12 bordered padding-15">
                          <span class="title bold">
                            Extreme High Speed 60 Plus
                          </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                              <span class="col s6 font-12">
                                <del class="text-blue" class="text-blue" class="text-blue" class="text-blue"><strong class="block font-25">$79.99/M</strong></del>
                                Limited Time Offer!
                                  <strong class="block font-25">$59.99/M</strong>
                                  Starting from
                              </span>
                                    <div class="col s6 m12 ps-price speed border-top">
                                <span class="number-big">60
                                  <strong class=" font-25 line-height">
                                      Mbps
                                  </strong>
                                </span>
                                <span class="font-12">
                                  <span class="block"> Download Speed</span>
                                </span>
                                    </div>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Passionate about HD movies,
                                        games and music and want to
                                        download your heart’s
                                    </p>
                                    <div class="chip-tag">
                                        Data Transfer Unlimited
                                        <!-- <i class="close material-icons">close</i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#seven!">
                            <div class="col s12 m12 bordered padding-15">
                          <span class="title bold">
                          Ultimate High Speed 120
                          </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                              <span class="col s6 font-12">
                                <del class="text-blue" class="text-blue" class="text-blue"><strong class="block font-25">$99.99/M</strong></del>
                                Limited Time Offer!
                                  <strong class="block font-25">$69.99/M</strong>
                                <span class="bold">Starting from</span>
                              </span>
                                    <div class="col s6 m12 ps-price speed border-top">
                                <span class="number-big">120
                                  <strong class=" font-25 line-height">
                                      Mbps
                                  </strong>
                                </span>
                                <span class="font-12">
                                  <span class="block"> Download Speed</span>
                                </span>
                                    </div>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Experience the internet at full and fastest
                                        speed! Download whatever you want in record
                                    </p>
                                    <div class="chip-tag">
                                        Data Transfer Unlimited
                                        <!-- <i class="close material-icons">close</i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#eight!">
                            <div class="col s12 m12 bordered padding-15">
                          <span class="title bold">
                          Platinum High Speed 200
                          </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                              <span class="col s6 font-12">
                                <del class="text-blue" class="text-blue" class="text-blue" class="text-blue"><strong class="block font-25">$119.99/M</strong></del>
                                Limited Time Offer!
                                  <strong class="block font-25">$99.99/M</strong>
                                <span class="bold">Starting from</span>
                              </span>
                                    <div class="col s6 m12 ps-price speed border-top">
                                <span class="number-big">200
                                  <strong class=" font-25 line-height">
                                      Mbps
                                  </strong>
                                </span>
                                <span class="font-12">
                                  <span class="block"> Download Speed</span>
                                </span>
                                    </div>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Enjoy our fastest Internet access
                                        with no speed limit! You can download movies and
                                    </p>
                                    <div class="chip-tag">
                                        Data Transfer Unlimited
                                        <!-- <i class="close material-icons">close</i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PHONE -->
            <div class="ps-content row">
                <h2>PHONE</h2>
                <div class="row">
                    <div class="col s12 padding-5">
                        <ul class="tabs tabs-fixed-width border">
                            <li class="tab col s3"><a class="active" href="#test3">    VOIP / LANDLINE </a></li>
                        </ul>
                    </div>
                    <div id="test3" class="carousel carousel-slider center" data-indicators="true">
                        <div class="carousel-item" href="#one!">
                            <div class="col s12 m12 bordered padding-15">
                            <span class="title bold">
                              VOIP Unlimited Local
                            </span>
                                <div class="divider"></div>
                                <div class="chip-tag-phone">
                                    Our Most Popular Plan
                                </div>
                                <div class="col s12 m4 ps-price">
                                <span class="col s6 font-12">
                                  Starting from
                                    <strong class="block font-25">$9.99/M</strong>
                                </span>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        The cheapest way to make Unlimited local calls,
                                        inbound and outbound phone calls in
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" href="#two!">
                            <div class="col s12 m12 bordered padding-15">
                             <span class="title bold">
                               VOIP Unlimited Canada
                             </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                                <span class="col s6 font-12">
                                  Starting from
                                    <strong class="block font-25">$15.99/M</strong>
                                </span>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Unlimited inbound & outbound calls across Canada!
                                        best package for Montreal *$2.50
                                    </p>
                                    <!-- <div class="chip-tag">
                                      Data Transfer Download 200Gb
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#three!">
                            <div class="col s12 m12 bordered padding-15">
                            <span class="title bold">
                              VOIP Unlimited Canada and USA
                            </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                                <span class="col s6 font-12">
                                  Starting from
                                    <strong class="block font-25">$19.99/M</strong>
                                </span>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Best Package for Unlimited inbound
                                        & outbound calls across Canada and USA! with
                                    </p>
                                    <!-- <div class="chip-tag">
                                      Data Transfer Download 200Gb
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#four!">
                            <div class="col s12 m12 bordered padding-15">
                            <span class="title bold">
                              Email To Fax
                            </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                                <span class="col s6 font-12">
                                  Starting from
                                    <strong class="block font-25">$14.99/M</strong>
                                </span>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Tired of missing important faxes because of a
                                        busy line or unattended fax machine?
                                    </p>
                                    <!-- <div class="chip-tag">
                                      Data Transfer Download 200Gb
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#five!">
                            <div class="col s12 m12 bordered padding-15">
                            <span class="title bold">
                              Copper Landline
                            </span>
                                <div class="divider"></div>
                                <div class="chip-tag-phone">
                                    Our Most Popular Plan
                                </div>
                                <div class="col s12 m4 ps-price">
                                  <span class="col s6 font-12">
                                    Starting from
                                      <strong class="block font-25">$23.99/M</strong>
                                  </span>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Copper Landlines compatible
                                        with security alarm system,
                                        best service with all features.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- INTERNET & PHONE -->
            <div class="ps-content row">
                <h2>INTERNET & PHONE</h2>
                <div class="row">
                    <div class="col s12 padding-5">
                        <ul class="tabs tabs-fixed-width border">
                            <li class="tab col s3"><a class="active" href="#test3">    VOIP / LANDLINE </a></li>
                        </ul>
                    </div>
                    <div id="test3" class="carousel carousel-slider center" data-indicators="true">

                        <div class="carousel-item" href="#one!">
                            <div class="col s12 m12 bordered padding-15">
                            <span class="title bold">
                              VOIP Unlimited Local
                            </span>
                                <div class="divider"></div>
                                <div class="chip-tag-phone">
                                    Our Most Popular Plan
                                </div>
                                <div class="col s12 m4 ps-price">
                                <span class="col s6 font-12">
                                  Starting from
                                    <strong class="block font-25">$9.99/M</strong>
                                </span>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        The cheapest way to make Unlimited local calls,
                                        inbound and outbound phone calls in
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item" href="#two!">
                            <div class="col s12 m12 bordered padding-15">
                             <span class="title bold">
                               VOIP Unlimited Canada
                             </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                                <span class="col s6 font-12">
                                  Starting from
                                    <strong class="block font-25">$15.99/M</strong>
                                </span>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Unlimited inbound & outbound calls across Canada!
                                        best package for Montreal *$2.50
                                    </p>
                                    <!-- <div class="chip-tag">
                                      Data Transfer Download 200Gb
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#three!">
                            <div class="col s12 m12 bordered padding-15">
                            <span class="title bold">
                              VOIP Unlimited Canada and USA
                            </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                                <span class="col s6 font-12">
                                  Starting from
                                    <strong class="block font-25">$19.99/M</strong>
                                </span>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Best Package for Unlimited inbound
                                        & outbound calls across Canada and USA! with
                                    </p>
                                    <!-- <div class="chip-tag">
                                      Data Transfer Download 200Gb
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#four!">
                            <div class="col s12 m12 bordered padding-15">
                            <span class="title bold">
                              Email To Fax
                            </span>
                                <div class="divider"></div>
                                <div class="col s12 m4 ps-price">
                                <span class="col s6 font-12">
                                  Starting from
                                    <strong class="block font-25">$14.99/M</strong>
                                </span>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Tired of missing important faxes because of a
                                        busy line or unattended fax machine?
                                    </p>
                                    <!-- <div class="chip-tag">
                                      Data Transfer Download 200Gb
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" href="#five!">
                            <div class="col s12 m12 bordered padding-15">
                            <span class="title bold">
                              Copper Landline
                            </span>
                                <div class="divider"></div>
                                <div class="chip-tag-phone">
                                    Our Most Popular Plan
                                </div>
                                <div class="col s12 m4 ps-price">
                                  <span class="col s6 font-12">
                                    Starting from
                                      <strong class="block font-25">$23.99/M</strong>
                                  </span>
                                </div>
                                <div class="col s12 m8 desc">
                                    <p class="margin-bottom">
                                        Copper Landlines compatible
                                        with security alarm system,
                                        best service with all features.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- /ps-contentwrapper -->

        <div class="ps-slidewrapper">
            <div class="ps-slides">
                <div class="bg-one">  <i class="material-icons icon-pricing">router</i></div>
                <div class="bg-two">  <i class="material-icons icon-pricing">ring_volume</i></div>
                <div class="bg-three">  <i class="material-icons icon-pricing">language</i></div>
            </div>
            <nav>
                <a href="#" class="ps-prev" ></a>
                <a href="#" class="ps-next" ></a>
            </nav>
        </div><!-- /ps-slidewrapper -->

    </section><!-- /ps-container -->
</div>
