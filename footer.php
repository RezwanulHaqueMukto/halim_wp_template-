<!-- CTA Area Start -->
<section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <?php
            if (class_exists('ACF')) {

            ?>
               <h4><?php the_field('cta_title', 'option'); ?> <span><?php the_field('cta_description_', 'option'); ?></span></h4>
            <?php } ?>
         </div>
         <div class="col-md-6 text-center">
            <?php
            if (class_exists('ACF')) {
            ?>
               <a href="<?php the_field('cta_title', 'option'); ?>" class="box-btn" target="blank"><?php the_field('cta_button_text', 'option'); ?> <i class="fa fa-angle-double-right"></i></a>
            <?php
            }
            ?>
         </div>
      </div>
   </div>
</section>
<!-- CTA Area End -->
<!-- Footer Area start -->
<footer class="footer-area pt-50 pb-50">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6">
            <?php
            if (is_active_sidebar('footer-1')) {
               dynamic_sidebar('footer-1');
            }
            ?>
         </div>
         <div class="col-lg-2 col-md-6">
            <?php
            if (is_active_sidebar('footer-2')) {
               dynamic_sidebar('footer-2');
            }
            ?>
         </div>
         <div class="col-lg-4 col-md-6">
            <?php
            if (is_active_sidebar('footer-3')) {
               dynamic_sidebar('footer-3');
            }
            ?>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="single-footer contact-box">
               <?php
               if (class_exists('ACF')) {


               ?>

                  <h4><?php the_field('footer_contact_title', 'option'); ?></h4>
                  <ul>
                     <?php
                     $footer_contact = get_field('footer_contact_icon', 'option');
                     //print_r($footer_contact);
                     foreach ($footer_contact as $footer_contact) {
                     ?>
                        <li style="list-style:none; padding-bottom:4.5%;"><i class="fa <?php echo $footer_contact['icon']; ?>">&nbsp&nbsp <?php echo $footer_contact['icon_text']; ?></i></>
                        </li>
                  </ul>
            <?php }
                  }
            ?>
            </div>
         </div>
      </div>
      <div class="row copyright">
         <div class="col-md-6">
            <p>&copy; All Rights Reserved 2020</p>
         </div>
         <div class="col-md-6 text-right">
            <ul>
               <?php
               if (class_exists('ACF')) {
                  $bottom_footer = get_field('bottom_footer_icon', 'option');
                  // print_r($bottom_footer);
                  foreach ($bottom_footer as $bottom_footer) {
                     # code...

               ?>
                     <li><a href="<?php echo $bottom_footer['icon_link']; ?>" target="blank"><i class="fa <?php echo $bottom_footer['icon']; ?>"></i></a></li>

               <?php
                  }
               } ?>
            </ul>
         </div>
      </div>
   </div>
</footer>
<!-- Footer Area End -->
<!-- Main JS -->

<?php wp_footer() ?>
</body>

</html>