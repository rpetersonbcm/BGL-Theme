<?php get_header(); ?>
   
<div class="container-fluid">
	<?php 
		// Get ID from link URL
		$id = $_REQUEST['post_id']; query_posts('p='.$id.'');?>
	<?php if( have_posts() ): while(have_posts()) : the_post(); ?>
	<div class="row">
		
		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/banners/operations-banner.jpg"  />
	</div>
	<div class="row wrapper">
		<h4 class="page-header">			
			<?php the_title(); ?>		
		</h4>
	</div>
	<div class="row wrapper">
		<?php the_content(); ?>	
	<?php endwhile; endif; wp_reset_query(); ?>
	</div>
	
</div>



<?php get_footer(); ?>