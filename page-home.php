<?php get_header(); ?>
<?php the_post(); ?>
<main role="main" class="main cf">
    <div class="content wrapper--sm padding--md">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
			<header class="article-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header>
			<section class="entry-content cf">
				<?php the_content(); ?>
			</section>
			<footer class="article-footer cf">
				
			</footer>
		</article>
	</div>
</main>
<?php get_footer(); ?>