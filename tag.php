<?php get_header(); ?>
<main role="main" class="main wrapper cf">
	<div class="content">
		<?php the_post(); ?>
		<h1 class="page-title"><?php _e( 'Tag Archives for') ?> <span><?php single_tag_title() ?></span></h1>
		<?php rewind_posts(); ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?>>
			<header class="article-header">
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Read'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<div class="entry-meta">
					<span class="meta-prep meta-prep-author"><?php _e('By '); ?></span>
					<span class="author vcard"><a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php printf( __( 'View all articles by %s', 'blankslate' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
					<span class="meta-sep"> | </span>
					<span class="meta-prep meta-prep-entry-date"><?php _e('Published '); ?></span>
					<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
				</div>
			</header>
			<section class="entry-summary">
				<?php the_excerpt( __( 'continue reading <span class="meta-nav">&raquo;</span>' )  ); ?>
			</section>
			<footer class="article-footer entry-utility cf">
				<span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ' ); ?></span><?php echo get_the_category_list(', '); ?></span>
				<span class="meta-sep"> | </span>
				<?php if ( $blankslate_tags = blankslate_tags(', ') ) : // ?>
				<span class="tag-links"><?php printf( __( 'Also tagged %s', 'blankslate' ), $blankslate_tags ) ?></span>
				<?php endif; ?>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment' ), __( '1 Comment' ), __( '% Comments' ) ) ?></span>
			</footer>
		</article>
		<?php endwhile; ?>
		<?php get_template_part('parts/pagination'); ?>
	</div>
	<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>