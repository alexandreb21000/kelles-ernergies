<?php /* Template Name: CONTACT */ 
?>


<?php
get_header();
?>


<div class="w-1200 m-auto d-flex jc-center">

            <div class="w-20 color-purple d-flex jc-center">
                <p class="rotated color-title playfair fs32 m-none txt-center ">CONTACT</p>
            </div>
            <div class="w-40 color-title d-flex jc-center">
                <p class="rotated color-title playfair fs32 m-none txt-center "></p>
            </div>
            <div class="w-80 d-flex ">
                    <div class="p-contenu">
                        <hr width="50%">
                        <?php echo do_shortcode( '[contact-form-7 id="179" title="Contact form 1"]' ); ?>
                        <hr width="50%">
                   </div>
            </div><!-- #primary -->
            <div class="w-20 d-flex">
                            <img src="/wordpress/wp-content/themes/kelles-ernergies/img/asso.jpg" alt="">
            </div>
</div>

<?php
/* get_sidebar(); */
get_footer();
