
<?php /* Template Name: Accueil */ ?>


<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kelles_Energies
 */

get_header();
?>

	<div class="w-1200 m-auto d-flex jc-center">

		<div class="w-20 color-purple d-flex jc-center">

			<p class="rotated color-title playfair fs32 m-none txt-center ">K'ELLES ENERGIES</p>
		</div>
		<div class="w-80 d-flex ">
			<div class="p-contenu">
				<h2 class="txt-center playfair fs32">LOREM IPSUM</h2>
				<p class="txt-center playfair fs24">Lorem Ipsum</p>
				<hr width="40%">
				<p class="txt-justify noto fs15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in diam nec purus egestas pretium vel sit amet lectus.
				Vestibulum consequat commodo metus a mollis. Etiam at tellus eget ex imperdiet sagittis quis at ligula. 
				Nulla sit amet nisl nunc. Nullam placerat ipsum id purus aliquet feugiat. Integer tempor felis libero, 
				at tristique turpis aliquet vel. Nulla facilisi. Duis blandit nisl sit amet nunc lobortis sodales.
				 Quisque cursus at ex in elementum. Quisque eu lectus et arcu vulputate commodo viverra a ipsum. Maecenas eu elit tellus. 
				
				</p>
			</div>
			<div>
				<img src="/wordpress/wp-content/themes/kelles-energies/img/intro_home.jpg" alt="">
			</div>
		</div>
		
	</div>

	<div class="w-1200 m-auto d-flex jc-center">

		<div class="w-80 d-flex ">
		<div id="primary" class="content-area">
		<main id="main" class="site-main d-flex">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
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

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

		<div class="w-20 color-purple d-flex jc-center">
			<p class="rotated color-title playfair ft-20 m-none txt-center ">ACTUALITE</p>
		</div>

	</div>


	

<?php
/* get_sidebar(); */
get_footer();
