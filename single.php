<?php
include("includes/headers/demo4.php"); 
?>

	<main id="primary" class="site-main single-page">

	
	<div class="intro">
		<img src="<?php the_post_thumbnail_url();?>" alt="">
	</div>
	
	<div class="container">
		<div class="content">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	</div>
		

	</main><!-- #main -->



<?php include("includes/footers/demo2.php");  ?>