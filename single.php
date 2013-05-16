<?php get_header(); ?>
<div class="content">
	<?php the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<span class="meta-prep meta-prep-author"><?php _e('By '); ?></span>
			<span class="author vcard"><a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php printf( __( 'View all articles by %s'), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
			<span class="meta-sep"> | </span>
			<span class="meta-prep meta-prep-entry-date"><?php _e('Published '); ?></span>
			<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
		</div>
		<div class="entry-content">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			<?php the_content(); ?>
			<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:') . '&after=</div>') ?>
		</div>
		<div class="entry-utility">
			<?php printf( __( 'This article was posted in %1$s%2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>. Follow comments with the <a href="%5$s" title="Comments RSS to %4$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a>.' ),
			get_the_category_list(', '),
			get_the_tag_list( __( ' and tagged '), ', ', '' ),
			get_permalink(),
			the_title_attribute('echo=0'),
			get_post_comments_feed_link() ) ?>
			<?php if ( ('open' == $post->comment_status) && ('open' == $post->ping_status) ) : // ?>
			<?php printf( __( '<a class="comment-link" href="#respond" title="Post a Comment">Post a Comment</a> or leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.'), get_trackback_url() ) ?>
			<?php elseif ( !('open' == $post->comment_status) && ('open' == $post->ping_status) ) : // ?>
			<?php printf( __( 'Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for post" rel="trackback">Trackback URL</a>.' ), get_trackback_url() ) ?>
			<?php elseif ( ('open' == $post->comment_status) && !('open' == $post->ping_status) ) : // ?>
			<?php _e( 'Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a Comment">Post a Comment</a>.') ?>
			<?php elseif ( !('open' == $post->comment_status) && !('open' == $post->ping_status) ) : // ?>
			<?php _e( ' Both comments and trackbacks are closed.' ) ?>
			<?php endif; ?>
		</div>
	</div>
	<?php get_template_part('parts/pagination'); ?>
	<?php comments_template('', true); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>