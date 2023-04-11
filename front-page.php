<?php


/**
 * template name: home
 */

?>

<?php get_header(); ?>


<section class="banner">
    <div class="container">
        <div class="banner__wrapper">
            <div class="banner__text">
                <h1><?php echo get_field('banner_title'); ?></h1>
                <p><?php echo get_field('banner_pargraph');?></p>
                <a id="banner__btn"  href="" class="btn bg--yellow"><?php echo get_field('button'); ?></a>
            </div>
            <?php
          $image = get_field('banner_image');
          if(!empty($image)):
          ?>
          <img src="<?php echo esc_url($image['url']) ?>" alt="">
          <?php endif; ?>
        </div>
    </div>
</section>

<section class="hm-services">
    <div class="container">
        <div class="hm-services__wrapper">
        <?php 

      $args = array(
          'post_type' =>'servicespost',
          'posts_per_page' => 3,

      );

      $newQuery = new WP_Query($args)

      ?>

      <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
            <div class="hm-services__item">
                <i class="<?php echo get_field('text_icon'); ?>"></i>
                <h4> <?php the_title() ?></h4>
                <p><?php the_content() ?></p>
                <a class="btn bg--yellow"href=""><?php echo get_field('services_link'); ?></a>
            </div>
            <?php
                endwhile;
            else:
                echo "no available content";
            endif;
            wp_reset_postdata();
              ?>
        </div>
    </div>
</section>

<section class="about__me">
    <div class="container">
        <div class="banner__wrapper">
            <div class="img">
            <?php
          $image = get_field('about_image');

          if(!empty($image)):
          ?>
          <img src="<?php echo esc_url($image['url']) ?>" alt="">
          <?php endif; ?>
            </div>          
            <div class="banner__text">   
                <h1><?php echo get_field('about_title') ?></h1>
                <p> <?php echo get_field('about_paragraph'); ?></p>
                <p> <?php echo get_field('about_paragraph2'); ?></p>
            </div>
    </div>
</section>

<section class="latest__trend">
    <div class="container">
        <div class="latest__title">
            <h2> <?php echo get_field('latest_title') ?></h2>
            <p><?php echo get_field('latest_paragraph'); ?></p>
        </div>
            <div class="latest__wrapper">
            <?php 

          $args = array(
              'post_type' =>'latestpost',
              'posts_per_page' => 3,

          );

          $newQuery = new WP_Query($args)

          ?>

          <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                <div class="latest__card">
                <?php
          $image = get_field('latest_image');
          if(!empty($image)):
          ?>
          <img src="<?php echo esc_url($image['url']) ?>" alt="">
          <?php endif; ?>
                    <div class="card__text">
                    <h2><?php the_title() ?></h2>
                    <p> <?php the_content() ?></p>
                    <a href=""><?php echo get_field('latest_button'); ?></a>
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
    </div>
</section>

<?php include 'contactus.php'; ?>

<?php get_footer(); ?>

