<?php /* Template Name: Mentions */ 
?>


<?php
get_header();
?>


<div class="w-1200 marg-center d-flex d-block-sm jc-center pad-header">

<div class="w-20 color-purple d-flex d-block-sm jc-center">
    <p class="rotated color-title playfair fs32 m-none txt-center ">MENTIONS LEGALES</p>
</div>

<div class="w-80 d-flex d-block-sm">
    <div class="p-contenu m-auto w-80-sm txt-center">
   

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text p-contenu w-100-sm"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
    </div>
    
</div>

</div>

<?php
	get_footer();
?>