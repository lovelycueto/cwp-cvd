<?php get_header(); ?>

<div class="latest_single">
    <div class="container">
      <div class="content">
            <div class="title">
            <h2><?php the_title()?></h2>
            </div>

            <div class="latest__single__img">
           <?php echo get_the_post_thumbnail()?>

            </div>

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

            <div class="latest__single_paragraph">
            <p><?php the_content()?></p>
            <p><?php echo get_the_excerpt()?></p>
            <p><?php echo get_field('update_excerpt')?></p>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>


