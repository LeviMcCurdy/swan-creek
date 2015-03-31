<?php get_header(); ?>
<div class="sub-page">


<div class="wrap">
<div class="container-main group">



<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail();
} 
?>


<div class="home-content sub-page-content">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1> 
  <?php the_content(); ?>
<?php endwhile; wp_reset_query(); ?>









</div>

</div><!-- End of First Wrap -->
</div><!-- End of Container-main -->



</div>
<?php get_footer(); ?>