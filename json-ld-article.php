<script type="application/ld+json">
<?php
echo '
{
  "@context" : "http://schema.org",
  "@type" : "Article",
  "name" : "'.get_the_title().'",
  "headline": "'.get_the_title().'",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "'.get_the_permalink().'"
  },
  "author" : {
    "@type" : "Person",
    "name" : "'.get_the_author_meta('first_name', $current_author->ID).' '.get_the_author_meta('last_name', $current_author->ID).'"
  },
  "publisher" : {
    "@type" : "Organization",
    "name" : "Logique Humaine",
    "logo" : {
      "@type": "ImageObject",
      "url": "champlacanienbordeaux.logiquehumaine.fr/wp-content/uploads/2019/09/logo.png"
    }

  },
  "datePublished" : "'.get_the_date('Y-m-d').'",
  "dateModified" : "'.get_the_modified_date('Y-m-d').'",
  "image" : "'.get_field('image').'",
  "articleSection" : "Ostéopathie",
  "articleBody" : "'.str_replace("'", ' ', htmlspecialchars(trim(strip_tags(get_the_content())))).'",
	"url" : "champlacanienbordeaux.logiquehumaine.fr/consultation"
}
';
?>
</script>