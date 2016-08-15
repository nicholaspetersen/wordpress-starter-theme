<?php $section_name = $post->post_name.'-'.sanitize_title(get_sub_field('section_name')); ?>
<section <?php if(get_sub_field('id')){ echo 'id="' . get_sub_field('id') . '" '; } elseif (get_sub_field('section_name')) { echo 'id="' . $section_name . '" ';} ?> class="<?php echo $section_name ?> <?php the_sub_field('class');?> row cf <?php the_sub_field('padding'); ?> <?php the_sub_field('background_color'); ?> " >

	<?php if(get_sub_field('background_image')):?>
	<?php 
		$attachment_id = get_sub_field('background_image');
		$size = 'full'; // Small Image
		$medium = 'medium';
		$large = 'large';
		$customlarge = 'custom-extra-large';
		
		$imageMedium = wp_get_attachment_image_src( $attachment_id, $medium );
		$imageLarge = wp_get_attachment_image_src( $attachment_id, $large );
		$imageCustomlarge = wp_get_attachment_image_src( $attachment_id, $customlarge );
	?>
	<style>
		.<?php echo $section_name; ?> {
			background-image: url(<?php echo $imageMedium[0];?>);
			background-size: cover;
		}

		@media (min-width: 38em) {
			.<?php echo $section_name; ?> {
				background-image: url(<?php echo $imageCustomlarge[0];?>);
				background-size: cover;
			}
		}
	</style>
	<?php endif;?>

		<div class="cf <?php the_sub_field('wrapper'); ?> <?php the_sub_field('column_count'); ?> <?php the_sub_field('column_options'); ?>">
			<?php if(get_sub_field('lead_in_content')) { echo '<div class="lead-in-content">' . get_sub_field('lead_in_content') . '</div>'; } ?>
			
			<div class="columns cf">
			<?php while( have_rows('columns') ): the_row(); ?>
			<div class="column" id="<?php echo sanitize_title(get_sub_field('column_name')); ?>">
				<?php if (get_sub_field('column_icon')) {
					echo '<div class="column-icon"><img src="' . get_sub_field('column_icon') . '" alt="icon"></div>';
				} ?>
				<div class="content">
					<?php the_sub_field('content');?>
				</div>
			</div>
			<?php endwhile; ?>
			</div>
			<div class="clear"></div>
			
			<?php if(get_sub_field('lead_out_content')) { echo '<div class="lead-out-content">' . get_sub_field('lead_out_content') . '</div>'; } ?>
		</div>
	</section>