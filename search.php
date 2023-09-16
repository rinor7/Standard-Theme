<?php 
include("includes/headers/demo4.php"); 
?>

<main id="primary" class="site-main search-page">
<div class="container">
<?php if ( have_posts() ) : ?>

<header class="page-header">
</header>

<?php while ( have_posts() ) : the_post(); ?>

  <article>
    <h2><?php the_title(); ?></h2>
    <!-- <div><?php the_excerpt(); ?></div> -->
    <a href="<?php the_permalink(); ?>">Weiterlesen</a>
  </article>

<?php endwhile; ?>

<?php else : ?>

<header class="page-header">
  <h1 class="page-title"><?php esc_html_e( 'Keine Ergebnisse gefunden', 'yourtheme' ); ?></h1>
</header>

<?php endif; ?>

</div>
</main><!-- #main -->


<?php include("includes/footers/demo1.php");  ?>