<?php
/*
Template Name: Home 
*/
?>

<?php get_header(); ?>
<div id="home_wrapper">
	<div class="row">
		<div class="span6 offset1">
			<h1>Legal<i>write</i></h1>
		</div>
	</div>
	<div class="row content">
		<div class="span5 offset1">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

			<?php endwhile; else: ?>
			  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
		<div class="span5 image">
			<img src="images/home.jpg">
		</div>
	</div>
</div>


<?php get_footer(); ?>
