<?php get_header();?>

<div class="contents">
	<main>
		<?php if ( have_posts() ): ?>
		<section class="topics2">
			<?php the_archive_title( '<h1>', '</h1>' ) ?>
			<ul>
				<?php while( have_posts() ) : the_post(); ?>
				<li>
					<?php
					$html  = '';
					$html .= '<a href="' . get_the_permalink() . '">';
					$html .= get_the_title();
					$html .= '</a>';
					$html .= '<p>' . get_the_excerpt() . '</p>';
					$html .= '<time>' . get_the_time('Y-m-d') . '</time>';
					$html .= '<span>' . get_the_author() . '</span>';
					echo $html;
					?>
				</li>
				<?php endwhile; ?>
			</ul>
		</section>
	<?php endif; ?>
	</main>



<?php
	get_sidebar();
	get_footer();
?>
