<?php
/**
 *
 * Template Name: Home Page
 * Author: WebTek
 * 
 *
**/

?>
<?php get_header(); ?>


<div class="wrap">
<div class="container-main group">



<?php if( have_rows('slideshow_home') ): ?>

	<ul class="rslides">

	<?php while( have_rows('slideshow_home') ): the_row(); 

		// vars
		$image = get_sub_field('image_home');


		?>

		<li>
		<img src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" />
		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>


<div class="home-content">
<h1 class="home-h1"><?php the_field('h1_home'); ?></h1> 
<h2><?php the_field('h2_home'); ?></h2>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; wp_reset_query(); ?>


</div>


<a href="<?php the_field('left_cta_home'); ?>"><div class="grid-half home-left-cta">
<p>We're Different. Find Out Why. <span>"The Swan Creek Process"</span></p>
</div></a>


<a href="<?php the_field('right_cta_home'); ?>"><div class="grid-half home-right-cta">
<p>5 Critical <span>Questions to ask your landscape contractor.</span></p>
</div></a>

<div class="border-bottom"></div>

</div><!-- End of First Wrap -->
</div><!-- End of Container-main -->



<div class="wrap container-main group">

<div class="grid-25 landscape-home">
<a href="<?php the_field('1_4_cta_link'); ?>">
<h3><?php the_field('1_4_cta_title'); ?></h3></a>
</div>

<div class="grid-25 hardscape">
<a href="<?php the_field('2_4_cta_link'); ?>">
<h3><?php the_field('2_4_cta_title'); ?></h3></a>
</div>

<div class="grid-25 maintenance">
<a href="<?php the_field('3/4_cta_link'); ?>">
<h3><?php the_field('3_4_cta_title'); ?></h3></a>
</div>


<div class="grid-25 videos">
<a href="<?php the_field('4/4_cta_link'); ?>">
<h3><?php the_field('4/4_cta_title'); ?></h3></a>
</div>

</div>



<?php get_footer(); ?>