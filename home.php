<?php get_header();?>

<nav id="pickup_field">
	<ul>
		<li class="now">
			<img src="<?php echo get_template_directory_uri(); ?>/images/pickup1.jpg"
			alt="「企画展覧会。日本×写真。開催期間2015年8月28日より東京、大阪、福岡、名古屋、仙台巡回"
			id="pickup1">
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/images/pickup2.jpg"
			alt="全国から集まった写真、約200点展示" id="pickup2">
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/images/pickup3.jpg"
			alt="壁に風景写真が３点掛けられている" id="pickup3">
		</li>
		<li>展覧会について</li>
	</ul>
</nav>

<div class="contents">
	<main>
		<section class="topics">
			<h2>トピックス</h2>
			<ul>
				<?php
					$args = array(
						'posts_per_page' => 5
					);
					query_posts( $args );
				 while( have_posts() ) : the_post();
			 ?>
				<li>
					<time datetime="<?php the_time( 'Y-m-d' ) ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
					<?php the_title(); ?>
				</li>
			<?php endwhile; ?>
			</ul>
		</section>
	</main>



<?php
	get_sidebar();
	get_footer();
?>
