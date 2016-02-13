<?php get_header(); ?>

		
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
	<div class="header__page">
		<div class="container center">
			<h2><?php the_title(); ?></h2>
			<?php $meta = get_post_meta( get_the_ID(), 'subtitulo' );?>
			<p><?php echo $meta[0]; ?></p>
		</div>
			
	</div>

	<article class="page container">


		<?php the_content(); ?>

		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

	</article>

<?php get_footer(); ?>