<?php get_header(); ?>
<!-- Titre du site -->
<h1 id="titre_page">Articles</h1>
<section id="gobale">
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	<article class="card mb-3">
		<div class="row g-0">
			<div class="col-md-4">
				<img src="<?php the_field('image'); ?>" class="img-fluid rounded-start" height="100%" alt="<?php the_field('description'); ?>">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h2 class="card-title"><?php the_title() ?></h2>
					<p class="card-text"><?php the_field('description'); ?></p>
					<p class="card-text"><small><a href="<?php the_permalink(); ?>">Lire l'article</a></small></p>
				</div>
			</div>
		</div>
	</article>
	<?php endwhile; ?>
	<?php endif; ?>
</section>
<?php get_footer(); ?>