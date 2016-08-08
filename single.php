<?php get_header(); ?>
   
<div class="container-fluid">
	<?php 
	
		// Get ID from link URL and open up link according to ID
		$id = $_REQUEST['post_id']; query_posts('p='.$id.'');?>
		<?php if( have_posts() ): while(have_posts()) : the_post(); ?>

	<div class="row" style="margin-top:120px;">
		<?php if($id==312){ ?>
					<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/banners/promise-banner.jpg" />
		<?php } else{ ?>
					<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/banners/operations-banner.jpg" />
		<?php }?>
		
	</div>
	<div class="row wrapper">
		<h4 class="page-header">			
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			    <?php if(function_exists('bcn_display'))
			    {
			        bcn_display();
			    }?>
			</div>		
		</h4>
	</div>
	<div class="row wrapper">
		<?php the_content(); ?>	
	<?php endwhile; endif; wp_reset_query(); ?>
	</div>
	
</div>



<?php get_footer(); ?>