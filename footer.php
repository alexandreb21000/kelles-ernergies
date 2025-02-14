<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kelles_Energies
 */

?>

	</div><!-- #content -->
<div class=" ">
	<footer id="colophon" class="padding-footer p-contenu footer-sm bg-footer site-footer w-1200 m-auto d-flex jc-between ai-ceter">
		<div class="d-flex flex-col txt-center">
		<?php the_custom_logo(); ?>
			<div class="site-info d-flex flex-col noto fs15 color-footer">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Copyright K\'Elles Energies 2018', 'kelles-energies' ), 'WordPress' );
					?>
			</div>
		</div>

		<div class="d-flex ai-end">
			<div class="d-flex ai-center footer-sm">
				<div>
					<a class="nodeco" href="http://alexandreb.promo-18.codeur.online/politique-de-confidentialite/"><p>Mentions Légales</p></a>
				</div>
				<div>
					<a href="https://www.facebook.com/KellesEnergies"><img class="social_media m-icon " src="<?php echo THEME_IMG_PATH; ?>/facebook_logo.jpg" alt="test"></a>
					<a href=""><img class="social_media m-icon " src="<?php echo THEME_IMG_PATH; ?>/insta_logo.jpg" alt="test"></a>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div>
</div><!-- #page -->

<?php wp_footer(); ?>
<button class="dis-button" onclick="topFunction()" id="entete" title="Go to top"><i class="fas fa-arrow-up fa-2x"></i>
</button>
</body>
</html>
