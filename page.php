<?php get_header(); ?>
<?php the_post(); ?>
<main role="main" class="main cf">
	<div class="content">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
			<section class="entry-content wrapper--sm cf">
				<?php the_content(); ?>
				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:' ) . '&after=</div>') ?>
			</section>
			<footer class="article-footer cf">
				
			</footer>
		</article>
	</div>
</main>
<?php get_footer(); ?>