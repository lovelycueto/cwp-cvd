<?php
/**
 * template name: updates
 */

?>

<?php get_header(); ?>


<section class="updates">
    <div class="container">
        <div class="updates__title">
            <h1><?php echo get_field('update_title')?></h1>
            <p> <?php echo get_field('update_subtext') ?></p>

        </div>
        <div class="updates__wrapper">
            <div class="updates__left">
            <?php 
            $args = array(
                'post_type' =>'update',
                'posts_per_page' => 2,

            );

            $newQuery = new WP_Query($args)

            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

                <div class="left__item">
                <?php echo get_the_post_thumbnail(); ?>
                    <div class="updates__author">
                        <ul>
                            <li>
                       <?php echo get_field('social_1')?>
                            </li>
                            <li>
                       <?php echo get_field('social_2')?>
                            </li>
                            <li>
                       <?php echo get_field('social_3')?>
                            </li>

                            
                        </ul>

                    </div>
                    <div class="updates__text">
                        <h3><?php the_title() ?></h3>
                        <p><?php the_content() ?></p>
                        <a href="<?php echo the_permalink()?>">Read more...</a>

                    </div>
                </div>
                <?php
                endwhile;
                else:
                echo "no available content";
                endif;
                wp_reset_postdata();
            ?>
                
            </div>
            <div class="updates__right">
            
                <div class="updates__categ bb-1">
                    <h3><?php echo get_field('categ_title')?></h3>
                    
                    <table>
                    <?php 
                    $args = array(
                        'post_type' =>'categs',
                        'posts_per_page' => 5,

                    );

                    $newQuery = new WP_Query($args)

                    ?>

                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                        <tr>
                            <td><?php the_title()?></td>
                            <td><?php the_content()?></td>
                        </tr>
                        <?php
                        endwhile;
                        else:
                        echo "no available content";
                        endif;
                        wp_reset_postdata();
                    ?>
                    </table>
                    
                </div>

                
   

               

                <div class="updates__rp bb-1">
                <h3>RECENT POST</h3>
                <?php 
                $args = array(
                    'post_type' =>'recent_posts',
                    'posts_per_page' =>3,

                );

                $newQuery = new WP_Query($args)

                ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                       
                        <div class="rp__item">
                            <?php echo get_the_post_thumbnail(); ?>
                            <div class="rp__item__text">
                                <h4><?php the_content()?></h4>
                                <p><?php echo get_the_date('M-d-Y')?></p>
                            </div>                          
                        </div>
                        <?php
                endwhile;
                else:
                echo "no available content";
                endif;
                wp_reset_postdata();
            ?>
                        
                </div>
              

                <div class="updates__tags">
                    <h3><?php echo get_field('tag_title')?></h3>
                    <div class="tags__item"> 

                    <?php 
                        $args = array(
                            'post_type' =>'update_tag',
                            'posts_per_page' =>6,
                        );
                        $newQuery = new WP_Query($args)
                        ?>
                        <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                        <a href="" class="btn bg-light"><?php the_title()?></a>             
                       
                        <?php
                        endwhile;
                        else:
                        echo "no available content";
                        endif;
                        wp_reset_postdata();
                    ?>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
</section>


<?php include 'contactus.php'; ?>

<?php get_footer(); ?>