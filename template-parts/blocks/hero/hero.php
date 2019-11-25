<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block--hero';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$heading = get_field('heading') ?: 'Your heading here...';
$content = get_field('content');
$primary_button_text = get_field('primary_button_text');
$primary_button_url = get_field('primary_button_url');
$secondary_button_text = get_field('secondary_button_text');
$secondary_button_url = get_field('secondary_button_url');

//Settings
$hero_layout_type = get_field('hero_layout_type');
$wrapper = get_field('wrapper');
$padding = get_field('padding');
$background_image = get_field('background_image');
$background_color = get_field('background_color');
$overlay_color = get_field('overlay_color');
$text_color = get_field('text_color');
$heading_size = get_field( 'heading-size') / 10 + 2;
$content_alignment = get_field('content_alignment');
$environment_color = get_field('environment_color');

if ( $content_alignment == 'hero--content-left' ) {
    $justify_content = 'flex-start';
} elseif ( $content_alignment == 'hero--content-center' ) {
    $justify_content = 'center';
} else {
    $justify_content = 'flex-end';
}

if ( $content_alignment == 'hero--content-left' ) {
    $alignment = 'left';
} elseif ( $content_alignment == 'hero--content-center' ) {
    $alignment = 'center';
} else {
    $alignment = 'right';
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php echo $hero_layout_type; ?> <?php echo $environment_color;?>" style="background-image: url('<?php echo esc_url($background_image['url']); ?>'); background-color: <?php echo $background_color; ?>;">

    <div class="block--hero__container <?php echo $wrapper; ?> <?php echo $padding; ?>" style="justify-content: <?php echo $justify_content; ?>">
      
        <div class="block--hero__content" style="text-align:<?php echo $alignment; ?>">

        <?php if($image) { echo wp_get_attachment_image( $image, 'full' ); } ?>
        <?php if($heading) { echo '<h1>'.$heading.'</h1>'; } ?>
        <?php if($content) { echo '<div class="content">'.$content.'</div>'; } ?>
        <?php if($primary_button_text) { echo '<a href="'.$primary_button_url.'" class="btn--primary">'.$primary_button_text.'</a>'; } ?>
        <?php if($secondary_button_text) { echo '<a href="'.$secondary_button_url.'" class="btn--secondary">'.$secondary_button_text.'</a>'; } ?>
    
        </div>
    
    </div>

    <style type="text/css">
        #<?php echo $id; ?> {
            background-color: <?php echo $background_color; ?>;
            color: <?php echo $text_color; ?>;
            position: relative;
        }

         #<?php echo $id; ?>:after {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: <?php echo $overlay_color; ?>;
            opacity: 65%;
         }

        #<?php echo $id; ?>.dark {
            color: white;
        }
    </style>
</div>