<?php
/*
Template Name: Pages
*/
?>
<?php
get_header();
the_post();
?>
<!-- JSON-LD SEO -->
<?php
require_once('json-ld-article.php')
?>
<!-- Titre du site -->
<div id="page" class="row">
  <div class="col-md-8">
  	<article class="box">
  	<?php the_content(); ?>
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
</div>

<?php get_footer(); ?>
