<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<div class="section-inner thin error404-content">

		<h1 class="entry-title"><?php _e( 'Siden blev ikke fundet', 'Standind' ); ?></h1>

		<div class="intro-text"><p><?php _e( 'Siden du forsøgte at tilgå, var desværre ikke tilgængelig. <br>Det kunne være du forsøgte at komme ind på et link, der ikke virkede, eller er eksisterende. Forsøg evt at gå tilbage til forrige side.', 'Standind' ); ?></p></div>



	</div><!-- .section-inner -->

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();