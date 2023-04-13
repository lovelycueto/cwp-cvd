<?php 

/**
 * Template Name: Contact
 */

?>
<?php get_header();?>

<section class="contact__section">
            <div class="container">
                <div class="contact__wrap">
                    <div class="contact__text">
                            <h2><?php the_title()?></h2>
                                <p><?php the_content()?></p>
                                    <div class="contact__icons">
                                        <div> 
                                            <i class="<?php echo get_field('info_1')?>"></i>
                                            <span><?php echo get_field('info_2')?></span>
                                        </div>
                                        <div>
                                            <i class="<?php echo get_field('info_3')?>"></i>
                                                <span><?php echo get_field('info_4')?></span>
                                        </div>
                                            <div>
                                                  <i class="<?php echo get_field('info_5')?>"></i>
                                                 <span><?php echo get_field('info_6')?></span>
                                            </div>
                                              
                                    </div>
                                        <div class="iconsss">
                                            <a href=""><i class="fa-brands fa-facebook"></i></a></i>
                                            <a href=""><i class="fa-brands fa-twitter"></i></a></i>
                                            <a href=""><i class="fa-brands fa-instagram"></i></a></i>
                                            <a href=""><i class="fa-brands fa-youtube"></i></a></i>
                                        </div>
                    </div>
                    <div class="contact__input">
                            <!-- <input type="name" placeholder="Name">
                            <input type="email" placeholder="Email">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                           <input type="submit" value="Send message"> -->
                            
                    <?php echo do_shortcode('[contact-form-7 id="245" title="Contact form 1"]') ?>

                            
                    </div>
                </div>
            </div>
        </section>
        
           

 <?php get_footer();?>