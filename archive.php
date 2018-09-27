<?php get_header(); ?>

<?php

	if(have_posts()): ?>

	<h2><?php 

	if(is_category()){
		single_cat_title();
	}elseif (is_tag()) {
		single_cat_title();
	}elseif (is_author()) {
		the_post();
		echo 'Auteur ' . get_the_author();
		rewind_posts();
	}elseif (is_day()) {
		echo 'Archives journalière' . get_the_date();
	}elseif (is_month()) {
		echo 'Archives mensuelle' . get_the_date('F Y');;
	}elseif (is_year()) {
		echo 'Archives annuelle' . get_the_date('Y');
	}else {
		echo 'Archives';
	}

	?></h2>

	
	<?php while(have_posts()) : the_post(); ?>
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