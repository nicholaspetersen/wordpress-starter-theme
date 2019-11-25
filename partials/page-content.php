<?php if ( get_field('layout_type') === 'normal_layout' ): ?>
	<section class="sm-wrapper md-padding">
		<div class="column">
			<?php the_field('content'); ?>
		</div>
	</section>
<?php elseif ( get_field('layout_type') === 'section_layout' ): ?>
	<?php if ( have_rows('sections') ): ?>
		<?php while ( have_rows('sections') ): the_row(); //Each section is a partial. This loops through each one so long as there is a partial named correctly to correspond with the flexible content layout ?>
			<?php get_template_part( 'partials/sections/section', get_row_layout() ); ?>
		<?php endwhile; ?>
	<?php else: ?>
		<div class="wrapper">
			<p>No content!</p>
		</div>
	<?php endif; ?>
<?php endif; ?>
