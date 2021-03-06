<?php get_header();?>

<nav>
<?php
if ( shortcode_exists( 'wp-structuring-markup-breadcrumb' ) ) {
    echo do_shortcode( '[wp-structuring-markup-breadcrumb]' );
}
?>
</nav>


	<div class="contents">
	<main>
		<?php if ( have_posts() ) : ?>
		<article class="contents-policy">
			<?php
				the_post();
				the_title( '<h1>', '</h1>' );
				the_content();
			?>
		</article>
		<?php endif; ?>
	</main>




<?php
	get_sidebar();
	get_footer();
?>
