<?php
/**
* Template Name: Marketing
*/
get_header();

?>
<div class="container-fluid">
	<div class="row" style="margin-top:120px;">
		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/banners/marketing-banner.jpg" />
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
 	
 	<?php query_posts('page_id=216'); while(have_posts()) : the_post(); ?>   
 	<?php the_content();?> 
 	<?php endwhile; wp_reset_query(); ?>
	
</div>  


<?php get_footer(); ?>


