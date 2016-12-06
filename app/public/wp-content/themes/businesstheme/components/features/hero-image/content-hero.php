<?php
/**
 * The template used for displaying hero content.
 *
 * @package Coffee_Mates_Business
 */
?>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="businesstheme-hero">
		<?php the_post_thumbnail( 'businesstheme-hero' ); ?>
	</div>
<?php endif; ?>
