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
		</article>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
