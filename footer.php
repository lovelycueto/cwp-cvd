<?php wp_footer(); ?>


<?php 
$homepage_id = get_option('page_on_front');

?>

<section class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="social__media">

            <?php if(have_rows('the_icons', $homepage_id)): ?>
             <?php  while( have_rows('the_icons', $homepage_id) ) : the_row(); ?>
                <?php
                 $sub_value = get_sub_field('icons'); 
                 $link      = get_sub_field('icon_link');
                ?>
                
 <a href="<?php echo $link ?>"><i class="<?php echo $sub_value ?>"></i></a>
              <?php endwhile; ?>
              <?php endif; ?>
               

            
                <p><?php echo get_field('footer_address',$homepage_id) ?></p>
            </div>
            <p> <?php echo get_field('copyright',$homepage_id) ?></p>
        </div>
    </div>
 </section>