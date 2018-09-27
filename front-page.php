<?php get_header(); ?>
<div class="center-img">
	<div class="image_header" ></div>
</div>
<section class="home">


	<article>
		<h1><?php the_field('a_title'); ?></h1>
		<p><?php the_field('a_text'); ?></p>
	</article>
	<article>
		<div class="row">
			
				
		<h3><?php the_field('b_title'); ?></h3>

		<?php

			global $post;
			$args = array( 'posts_per_page' => 6);

			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<div>
				    <article>
				    	<p>
					       <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('frontpage'); ?></a>
					       <strong>
					       	<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
					       </strong>
					       	<a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 5 ); ?></a>


							<?php 

							$categories = get_the_category();
							$separator = ' ';
							$output = '';
							$hashtag = '#';


							if ($categories) {
								foreach($categories as $category){

									$output .= '<a class="hashtag" href="'. get_category_link($category->term_id) . '">'. $hashtag . $category->cat_name . '</a>'  . $separator;

								}

								echo trim($output, $separator);
							}

							?>


				       </p>

				       <span class="timer"><?php echo ' Il y a ' . human_time_diff( get_the_time('U'), current_time('timestamp') ); ?></span>
				    </article>
				</div>
		<?php endforeach; 
		wp_reset_postdata();?>
		<div class="description_img">
			<p><?php the_field('b_text'); ?></p> 
		</div>
	</article>

	<article>
		<h2><?php the_field('c_title'); ?></h2>
		<p><?php the_field('c_text'); ?></p>
	</article>
	<article class="card">
		<ul>
			<?php the_field('recette_salee'); ?>
		</ul>
	</article>
	<article class="card">
		<ul>
			<?php the_field('recette_sucree'); ?>
		</ul>
	</article>
	<article class="card">
		<ul>
			<?php the_field('recette_cocktail'); ?>
		</ul>
	</article>
	<article>
		<div>
			<h2><?php the_field('d_title'); ?></h2>
			<p><?php the_field('d_text'); ?></p>
		</div>
	</article>
	<article>
	<article>
		<h2><?php the_field('e_title'); ?></h2>
		<?php echo do_shortcode( '[contact-form-7 id="57" title="Material design"]' ); ?>
	</article>	
		
</section>

<?php get_footer(); ?>