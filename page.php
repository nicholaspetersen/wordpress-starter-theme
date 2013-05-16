<?php get_header(); ?>
	<div class="content">
		<?php the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:' ) . '&after=</div>') ?>
			</div>
		</div>
		<?php comments_template( '', true ); ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>