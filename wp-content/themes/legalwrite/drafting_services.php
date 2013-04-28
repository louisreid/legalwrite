<?php
/*
Template Name: Drafting Services 
*/
?>

<?php get_header(); ?>
<div id="single_wrapper">
	<div class="row">
		<div class="span6 offset1">
			<a href="/"><h3>Legal<i>write</i></h3></a>
		</div>
	</div>
	<div class="row content">
	</div>
	<div class="row content">
		<div class="span5 offset1">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h4><?php the_title(); ?></h4>
			<?php the_content(); ?>

			<?php endwhile; else: ?>
			  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
		<div class="span5 image">
			<img src="../images/drafting.jpg" />
		</div>
	</div>
</div>


<?php get_footer(); ?>
