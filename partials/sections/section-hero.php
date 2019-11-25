<?php $section_name = $post->post_name.'-'.sanitize_title(get_sub_field('section_name')); ?>
<?php 
		$color = get_sub_field('background_color');
		$attachment_id = get_sub_field('background_image');
		$size = 'full';
		$image = wp_get_attachment_image_src( $attachment_id, $size );
		$image_small = wp_get_attachment_image_src( $attachment_id, 'small' );
		$image_medium = wp_get_attachment_image_src( $attachment_id, 'medium' );
		$image_large = wp_get_attachment_image_src( $attachment_id, 'large' );
	?>
<section <?php if(get_sub_field('id')){ echo 'id="' . get_sub_field('id') . '" '; } elseif (get_sub_field('section_name')) { echo 'id="' . $section_name . '" ';} ?> class="<?php echo $section_name ?> <?php the_sub_field('class');?> row cf <?php the_sub_field('padding'); ?> <?php the_sub_field('background_color');?>">

		<?php if(get_sub_field('background_image')): ?>
			<style>
				.<?php echo $section_name ?> {
					background-image: url(<?php echo $image[0];?>);
					background-position: center;
					background-size: cover;
				}
			</style>
		<?php endif;?>
		
		
		<?php if(get_sub_field('content')): ?>
		<div class="<?php the_sub_field('wrapper'); ?> cf <?php the_sub_field('content_padding'); ?>">
			<div class="content">
				<?php if(get_sub_field('page_title')): ?><h1 class="align-center page-headline"><?php the_sub_field('page_title'); ?></h1><?php endif; ?>
				<?php the_sub_field('content'); ?>
			</div>
		</div>
		<?php endif;?>
	</section>