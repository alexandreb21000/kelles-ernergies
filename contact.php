<?php /* Template Name: CONTACT */ 
?>


<?php
get_header();
?>


<div class="w-1200 m-auto d-flex jc-center d-block-sm pad-header">

            <div class="w-20 color-purple d-flex jc-center">
                <p class="rotated color-title playfair fs32 m-none txt-center ">CONTACT</p>
            </div>
           
            <div class="w-80 d-flex jc-center bg-footer">
                    <div class="d-block-sm marg-contact playfair">
                        
                        <?php echo do_shortcode( '[contact-form-7 class="w-80-sm" id="179" title="Contact form 1"]' ); ?>
                       
                   </div>
            </div><!-- #primary -->
</div>

<?php
/* get_sidebar(); */
get_footer();
