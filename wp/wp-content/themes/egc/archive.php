<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package egc
 */

get_header(); ?>
    <div>
        <pre>
            <?php $cat=get_queried_object();
//            var_dump($cat);
            $term_id = $cat->term_id;
            $taxonomy_name = $cat->taxonomy;
            $termchildren = get_term_children( $term_id, $taxonomy_name );

            ?>
        </pre>
    </div>
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
                            <?php if($cat->parent!=0){?>
                            <div id="test1" class="" data-indicators="true">
                                <?php
                                if (have_posts()): $i = 0;
                                    while (have_posts()): the_post();

                                        get_template_part( 'template', 'archive_list' );
                                        $i++;
                                    endwhile;
                                endif; ?>
                            </div>
                            <?php
                            }else{
                                ?>
                                <div class="row">
                                    <div class="col s12">
                                        <ul class="tabs">
                                          <?php
                                            $terms=[];
                                            foreach ( $termchildren as $child )
                                            {
                                                $term = get_term_by( 'id', $child, $taxonomy_name );
                                                $terms[]=$term;
                                                    ?>
                                                  <li class="tab col s3">
                                                      <a href="#<?=$term->slug?>"><?=$term->name?></a>
                                                  </li>

                                                <?php
                                                }
                                               ?>
                                        </ul>
                                    </div>
                                    <?php  foreach ( $terms as $term ) {?>
                                        <div id="<?=$term->slug?>" class="col s12">
                                            <?php
                                            /**
                                             * children of children
                                            **/
                                            $children = get_terms( $term->taxonomy, array(
                                                'parent'    => $term->term_id,
                                                'hide_empty' => false
                                            ) );
                                            if(count($children)>0)
                                            {

                                                $termchildren_1 = $children;
                                            ?>

                                                <div class="col s12">
                                                    <ul class="tabs">
                                                        <?php
                                                        foreach ( $termchildren_1 as $child )
                                                        {
                                                            ?>
                                                            <li class="tab col s6">
                                                                <a href="#<?=$child->slug?>"><?=$child->name?></a>
                                                            </li>

                                                        <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>


                                                <?php
                                                foreach($termchildren_1 as $grandchild)
                                                {
                                                 ?>
                                                <div id="<?=$grandchild->slug?>" class="col s12">
                                                        <?php
                                                        $args = array(
                                                            'post_type' => 'packages',
                                                            'cat' => $grandchild->term_id
                                                        );

                                                        $packages = new WP_Query($args);
                                                        if ($packages->have_posts()):
                                                            while ($packages->have_posts()):$packages->the_post();
                                                                get_template_part('template', 'archive_list');
                                                            endwhile;
                                                        endif;
                                                        ?>
                                                    </div>
                                                <?php
                                                }
                                            }else {
                                                $args = array(
                                                    'post_type' => 'packages',
                                                    'cat' => $term->term_id
                                                );

                                                $packages = new WP_Query($args);
                                                if ($packages->have_posts()):
                                                    while ($packages->have_posts()):$packages->the_post();
                                                        get_template_part('template', 'archive_list');
                                                    endwhile;
                                                endif;
                                            }  ?>

                                        </div>
                                    <?php

                                    }
                                    ?>


                                </div>
    `                       <?php
                            }
                            ?>
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