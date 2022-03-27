<?php get_header(); ?>
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

<!-- JSON-LD SEO -->
<?php
require_once('json-ld-article.php')
?>
<!-- Articles -->
<div id="page" class="row">
	<div class="col-md-8">
		<article class="box" id="<?php the_title()?>">
			<?php the_content(); ?>
				<?php $postTags = get_the_tags(); ?>
				<?php if($postTags) { ?>
				<hr />
				<div id="keywords">
					<h4>Mots clés </h4>
					<ul>
					<?php foreach($postTags as $tag) { ?>
						<li><strong><?php echo $tag->name ?></strong></li>
					<?php } ?>
					</ul>
				</div>
				<?php } ?>

			<hr />
			<div id="auteur">
			<h4>Auteur</h4>
					<?php the_author_meta('first_name', $current_author->ID)?> <?php the_author_meta('last_name', $current_author->ID)?> le <time datetime="<?php get_the_modified_date(); ?>"> <?php the_date(); ?></time>

			</div>

			<?php
			if(get_field('sources')!=null){
			?>
			<hr />
			<div class="source">
			<b>Sources </b>
			<?php the_field('sources') ?>
			</div>
			<?php
			}
			?>
			<hr />
			<div class="partager">
				<h4>Partager</h4>
			  <div class="g-plusone" data-size="small" data-annotation="bubble" data-href="<?php the_permalink()?>"></div>
			  <div class="fb-like" data-href="<?php the_permalink()?>" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div>
			</div>
		</article>
	</div>
	<div class="col-md-4">
		<aside class="box">
      <h2>Sommaire</h2>
  		<ul class="list-group list-group-flush" id="sommaire">
  		</ul>
  		<?php dynamic_sidebar(); ?>
  	</aside>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
