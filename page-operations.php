<?php
/**
* Template Name: Operations
*/
get_header();

?>
<div class="container-fluid">
	<div class="row" style="margin-top:120px;">
		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/banners/operations-banner.jpg" />
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
		<div class="col-md-3"></div>
		<div class="list-group col-md-6 text-center">
			<?php
			    $args = array( 'category' => 11 );

			    $myposts = get_posts( $args );
			    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			        
			            <a class="list-group-item op-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			        
			    <?php endforeach; 
			    wp_reset_postdata();?>			
		</div>
	
</div>

<?php get_footer(); ?>


