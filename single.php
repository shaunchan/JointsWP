<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="grid-x align-center">
	<div class="row small-11">
		<div class="grid-x">
			<div class="row large-6">
				<img src="https://via.placeholder.com/550x309" alt="">
			</div>
			<div class="row large-6">
				<div><h1><?=the_title()?></h1></div>
				<div class="rowSpacer"></div>
				<div><?=the_content()?></div>
			</div>
		</div>
	</div>
</div>


<?php endwhile; else : ?>

	<?php get_template_part( 'parts/content', 'missing' ); ?>

<?php endif; ?>


<?php get_footer(); ?>