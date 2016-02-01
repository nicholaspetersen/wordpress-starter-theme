<?php get_header(); ?>
<?php the_post(); ?>
<main role="main" class="main wrapper cf">
	<div class="content">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
			<header class="article-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header>
			<section class="entry-content cf">
				<?php the_content(); ?>
				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:' ) . '&after=</div>') ?>
			</section>
			<footer class="article-footer cf">
				
			</footer>
		</article>
	</div>
	<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>