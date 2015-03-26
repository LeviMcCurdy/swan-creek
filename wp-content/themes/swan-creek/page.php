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


<!-- ///// CODE FOR THE STAFF PAGE ///// -->
<?php if ( is_page(26) ) { ?>
			
<?php if( have_rows('staff') ): ?>

	<div class="staff-members group">

	<?php while( have_rows('staff') ): the_row(); 

		// vars
		$image = get_sub_field('staff_member_image');
		$name = get_sub_field('staff_member_name');
		$position = get_sub_field('staff_member_position');

		?>

		<div class="grid-half">

			

				<img src="<?php echo $image ?>" class="staff-image" alt="<?php echo $image['alt'] ?>" />

			

		   <p class="staff-name"> <?php echo $name; ?></p>
		   <p class="staff-position"><?php echo $position; ?></p>


		</div>

	<?php endwhile; ?>

	</div>

<?php endif; ?>




		<?php } ?>

</div>

</div><!-- End of First Wrap -->
</div><!-- End of Container-main -->



</div>
<?php get_footer(); ?>