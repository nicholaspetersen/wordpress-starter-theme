<?php get_header(); ?>
<?php the_post(); ?>
<main role="main" class="main wrapper cf">
	<div class="content">
		<h1 class="page-title"><?php _e( 'Category Archives for') ?> <span><?php single_cat_title() ?></span></h1>
		<?php $categorydesc = category_description(); if ( !empty($categorydesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>

		<?php rewind_posts(); ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?>>
			<header class="article-header">
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Read'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<div class="entry-meta">
					<span class="meta-prep meta-prep-author"><?php _e('By '); ?></span>
					<span class="author vcard"><a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php printf( __( 'View all articles by %s' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
					<span class="meta-sep"> | </span>
					<span class="meta-prep meta-prep-entry-date"><?php _e('Published '); ?></span>
					<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
				</div>
			</header>
			<section class="entry-summary">
				<?php the_excerpt( __( 'continue reading <span class="meta-nav">&raquo;</span>', 'blankslate' )  ); ?>
			</section>
			<footer class="article-footer entry-utility cf">
				<?php if ( $blankslate_cats = blankslate_cats(', ') ) : // ?>
				<span class="cat-links"><?php printf( __( 'Also posted in %s' ), $blankslate_cats ) ?></span>
				<span class="meta-sep"> | </span>
				<?php endif ?>
				<?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ') . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\"> | </span>\n" ) ?>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment' ), __( '1 Comment' ), __( '% Comments' ) ) ?></span>
			</footer>
		</article>
		<?php endwhile; ?>
		<?php get_template_part('parts/pagination'); ?>
	</div>
	<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>