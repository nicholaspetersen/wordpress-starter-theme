<?php 
	$section_name = $post->post_name.'-'.sanitize_title(get_sub_field('section_name'));

	$background_color = get_sub_field('background_color');
	$attachment_id = get_sub_field('background_image');
	$size = 'full';
	$image = wp_get_attachment_image_src( $attachment_id, $size );
	$image_small = wp_get_attachment_image_src( $attachment_id, 'small' );
	$image_medium = wp_get_attachment_image_src( $attachment_id, 'medium' );
	$image_large = wp_get_attachment_image_src( $attachment_id, 'large' );
?>

<section <?php if(get_sub_field('id')){ echo 'id="' . get_sub_field('id') . '" '; } elseif (get_sub_field('section_name')) { echo 'id="' . $section_name . '" ';} ?> class="<?php if (get_sub_field('section_name')) { echo $section_name;} ?> content cf <?php the_sub_field('padding') ?> <?php the_sub_field('environment_color'); ?> <?php the_sub_field('class'); ?>" <?php if ($background_color): ?>style="background-color:<?php echo $background_color; ?>;" <?php endif; ?>>

<?php if(get_sub_field('background_image')): ?>
<style>
.<?php echo $section_name; ?> {
	background-image: url(<?php echo $image[0];?>);
	background-position: center;
	background-size: cover;
}
</style>
<?php endif;?>
	<div class="container">
		<div class="column">
			<div class="content">
				<!--You can only reach this page if the 'layout-<?php echo get_row_layout(); ?>' isn't named correctly
				     or the file doesn't exist yet. Please check your spelling and make sure the file exists.-->
				<p>This section needs to be developed!</p>
			</div>
		</div>
	</div>
</section>
