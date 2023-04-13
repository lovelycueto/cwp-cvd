<?php
/**
 * template name: services
 */

?>

<?php get_header(); ?>

<?php 
            $args = array(
                'post_type' =>'servicescontentpost',
                'posts_per_page' => -1,

            );

            $newQuery = new WP_Query($args)

            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
<section class="<?php echo get_field('class_name')?>">
    <div class="container">
        <div class="service__wrapper">
            <div class="web">
                <div class="service__text">
                    <h1><?php the_title()?></h1>
                    <p><?php echo the_content() ?></p>
                    <p><?php echo get_the_excerpt() ?></p>
                    <div class="price">
                        <h4><?php echo get_field('services_pricetext')?></h4>
                        <h2><?php echo get_field('services_amount') ?></h2>
                        <h5><i><?php echo get_field('price_subtext')?></i></h5>
                    </div>
                </div>
            <?php echo get_the_post_thumbnail(); ?>
            </div>
        </div>
    </div>
    <div class="down">
        <a href=""><i class="<?php echo get_field('icon'); ?>"></i></a>
        </div>    
</section>
<?php
    endwhile;
    else:
    echo "no available content";
    endif;
    wp_reset_postdata();
 ?>




<?php include 'contactus.php'; ?>

<?php get_footer(); ?>