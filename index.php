<?php get_header(); ?>
<section class="home">
<?php

	if(have_posts()):
		while(have_posts()) : the_post(); ?>
		<a href="<?php the_permalink(); ?>">
			<article>
				<?php the_post_thumbnail(); ?>
				<h2><?php  the_title(); ?></h2>
				<p><?php  the_content(); ?></p> 
			</article>	
		</a>
<?php
	endwhile;
	else: echo 'No content here !';
	endif;
?>
		
	
</section>

<?php get_footer(); ?>