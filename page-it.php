<?php
/**
* Template Name: IT
*/
get_header();

?>
<div class="container-fluid">
	<div class="row" style="margin-top:120px;">
		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/banners/it-banner.jpg" />
	</div>
	<div class="row wrapper">
		<h4 class="page-header">
					
		</h4>
	</div>

	<div class="row wrapper">
		<div class="col-md-8">
			
			<?php query_posts('page_id=88'); while(have_posts()) : the_post(); ?>   
			<?php the_content();?> 
			<?php endwhile; wp_reset_query(); ?>
			
		</div>  
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading text-center section-panel-header-it">Links and Training Docs</div>
				<div class="row wrapper links-list">
					<div id="accordion" class="panel-group">
						<div class="panel panel-default">
							<div id="headingOne" class="panel-heading panel-header-it">
								<h4 class="panel-title"><a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
									useful links
								</a></h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in">
								<div class="panel-body">
									
					                <a href="https://bmgl.onit.com/portals#!portals/apps/55d383daed404fbe6e00004d/atoms/new/1443128129/false" target="_blank">
					                Submit a Ticket (Ticket Tracker)</a><br />

					                
					                
					                <a href="https://bmgl.onit.com/portals#!portals/apps/564249c3ed404f3b0100003f/atoms/new/1447347371/false" target="_blank">
					                IT New Hire Request</a><br />


					                <a href="policies.aspx">
					                Policies and Procedures</a><br />

					                
					                <a href="https://bmgl.onit.com/portals#!portals/apps/56422725ed404fe8be000031/atoms/new/1452525311/false" target="_blank">
					                Request a Custom Requisition</a><br />

								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div id="headingTwo" class="panel-heading panel-header-it">
								<h4 class="panel-title"><a class="collapsed" href="#collapseTwo" data-toggle="collapse" data-parent="#accordion">
									TRAINING DOCUMENTS
								</a></h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									<a href="http://bmgl.com/media/wysiwyg/bmgl/Intranet/OnitTraining.pdf" target="_blank">ONIT Change Management and Ticket Tracking Training</a>
								</div>
							</div>
						</div>							
					</div>
				</div>				
			</div>
		</div>         
    </div>
</div>

<?php get_footer(); ?>


