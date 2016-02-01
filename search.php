<?php get_header(); ?>
<main role="main" class="main wrapper cf">
	<div class="content">
		<?php if ( have_posts() ) : ?>
		<h1 class="page-title"><?php _e( 'Search Results for '); ?><span><?php the_search_query(); ?></span></h1>
		<?php while ( have_posts() ) : the_post() ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="article-header">
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Read'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<?php if ( $post->post_type == 'post' ) { ?>
				<div class="entry-meta">
					<span class="meta-prep meta-prep-author"><?php _e('By '); ?></span>
					<span class="author vcard"><a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php printf( __( 'View all articles by %s'), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
					<span class="meta-sep"> | </span>
					<span class="meta-prep meta-prep-entry-date"><?php _e('Published '); ?></span>
					<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
				</div>
				<?php } ?>
			</header>
			<section class="entry-summary cf">
				<?php the_excerpt( __( 'continue reading <span class="meta-nav">&raquo;</span>' )  ); ?>
				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:' ) . '&after=</div>') ?>
			</section>
			<?php if ( $post->post_type == 'post' ) { ?>
			<footer class="article-footer entry-utility cf">
				<span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in '); ?></span><?php echo get_the_category_list(', '); ?></span>
				<span class="meta-sep"> | </span>
					<?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ') . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\"> | </span>\n" ) ?>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'blankslate' ), __( '1 Comment' ), __( '% Comments' ) ) ?></span>
			</footer>
			<?php } ?>
		</article>
		<?php endwhile; ?>
		<?php get_template_part('parts/pagination'); ?>
		<?php else : ?>
		<article id="post-0" class="post no-results not-found">
			<h2 class="entry-title"><?php _e( 'Nothing Found' ) ?></h2>
			<div class="entry-content">
				<p><?php _e( 'Sorry, nothing matched your search. Please try again.'); ?></p>
				<?php get_search_form(); ?>
			</div>
		</article>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>