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


<!-- ///// CODE FOR THE CONTACT PAGE ///// -->
<?php if ( is_page(20) ) { ?>
			
<div class="group">

<div class="grid-half">
<?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form 1"]' ); ?>
</div>

<div class="grid-half">
<p>At Swan Creek Lanscaping we are here to help you.
If you have questions or would like to talk to us
about a specific project, we offer a no-obligation
consultation.</p>
<p>Fill out the form and we will respond promptly.
Thanks for your interest in our services!</p>
<p><strong>Phone:</strong><br>
410.378.8668</p>
<p><strong>Mailing Address:</strong><br>
Swan Creek Landscaping,<br>
201 Jackson Station Rd<br>
Perryville, MD 21903</p>
</div>


</div>
		<?php } ?>



		<!-- ///// CODE FOR THE CONTACT PAGE ///// -->
<?php if ( is_page(111) ) { ?>
			
<div class="group">

<div class="grid-half">
<?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form 1"]' ); ?>
</div>

<div class="grid-half">
<p>At Swan Creek Lanscaping we are here to help you.
If you have questions or would like to talk to us
about a specific project, we offer a no-obligation
consultation.</p>
<p>Fill out the form and we will respond promptly.
Thanks for your interest in our services!</p>
<p><strong>Phone:</strong><br>
410.378.8668</p>
<p><strong>Mailing Address:</strong><br>
Swan Creek Landscaping,<br>
201 Jackson Station Rd<br>
Perryville, MD 21903</p>
</div>


</div>
		<?php } ?>




		<!-- ///// CODE FOR THE CONTACT PAGE ///// -->
<?php if ( is_page(115) ) { ?>
			
<div class="group">

<div class="grid-half">
<?php echo do_shortcode( '[contact-form-7 id="255" title="Testimonial"]' ); ?>
</div>

<div class="grid-half">
<p>Have you hired Swan Creek Landscaping for a past or present job? Submit a testimonial and let the world know what amazing services Swan Creek has to offer!</p>
<p>Fill out the form and we will respond promptly.
Thanks for your interest in our services!</p>
<p><strong>Phone:</strong><br>
410.378.8668</p>
<p><strong>Mailing Address:</strong><br>
Swan Creek Landscaping,<br>
201 Jackson Station Rd<br>
Perryville, MD 21903</p>
</div>


</div>
		<?php } ?>



<!-- ///// CODE FOR THE TESTIMONIALS PAGE ///// -->
<?php if ( is_page(18) ) { ?>
			
<?php if( have_rows('testimonials') ): ?>

	<div class="group">

	<?php while( have_rows('testimonials') ): the_row(); 

		// vars
		$testimonial = get_sub_field('testimonial_text');
		$author = get_sub_field('testimonial_author');
		

		?>

		<div class="testimonial-con">

		   <p class="test-body"> <?php echo $testimonial; ?></p>
		   <p class="test-author"><?php echo $author; ?></p>


		</div>

	<?php endwhile; ?>



<?php endif; ?>


</div>

		<?php } ?>





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