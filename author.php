<?php get_header(); ?>
<main role="main" class="main cf">
    <div class="content wrapper--sm padding--md">
        <?php the_post(); ?>
        <h1 class="page-title author"><?php printf( __( 'Author Archives: <span class="vcard">%s</span>'), "<a class='url fn n' href='$authordata->user_url' title='$authordata->display_name' rel='me'>$authordata->display_name</a>" ) ?></h1>
        <?php $authordesc = $authordata->user_description; if ( !empty($authordesc) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $authordesc . '</div>' ); ?>
        <?php rewind_posts(); ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Read', 'blankslate'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                <div class="entry-meta">
                    <span class="meta-prep meta-prep-author"><?php _e('By '); ?></span>
                    <span class="author vcard"><a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php printf( __( 'View all articles by %s', 'blankslate' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
                    <span class="meta-sep"> | </span>
                    <span class="meta-prep meta-prep-entry-date"><?php _e('Published '); ?></span>
                    <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
                </div>
                <div class="entry-summary">
                    <?php the_excerpt( __( 'continue reading <span class="meta-nav">&raquo;</span>' )  ); ?>
                </div>
                <div class="entry-utility">
                    <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in '); ?></span><?php echo get_the_category_list(', '); ?></span>
                    <span class="meta-sep"> | </span>
                        <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'blankslate' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\"> | </span>\n" ) ?>
                    <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'blankslate' ), __( '1 Comment' ), __( '% Comments' ) ) ?></span>
                </div>
            </div>
        <?php endwhile; ?>
        <?php get_template_part('parts/pagination'); ?>
    </div>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>