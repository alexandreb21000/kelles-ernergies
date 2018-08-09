<?php /* Template Name: CONTACT */ 
?>


<?php
get_header();
?>


<div class="w-1200 m-auto d-flex jc-center">

            <div class="w-20 color-purple d-flex jc-center">
                <p class="rotated color-title playfair fs32 m-none txt-center ">CONTACT</p>
            </div>
           
            <div class="w-80 d-flex jc-center">
                    <div class="">
                        
                        <?php echo do_shortcode( '[contact-form-7 id="179" title="Contact form 1"]' ); ?>
                       
                   </div>
            </div><!-- #primary -->
</div>

<?php
/* get_sidebar(); */
get_footer();
