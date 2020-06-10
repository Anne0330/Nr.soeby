<?php
/**
 * Template Name: Tilmelding
 */
get_header();

  <div class="container entry-content">
    <h1><?php the_title(); ?></h1>
    <?php
      if (have_posts()) : while (have_posts()) : the_post();
      the_content();
      endwhile;
      endif;
     ?>
  </div>

<section>
	<?php include 'stel_udregner.php';?>
</section>
	<?php get_footer(); ?>
