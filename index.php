<?php get_header(); ?>


    

    <!-- Page Content -->
    <div>
        
        <div class="row slider-div">
            <?php masterslider(1); ?>
        </div>
       <!-- Big 3 Icon Section -->
       <div class="row">
			
			<div class="wrapper">
                
                
			
			<?php 

				$args = array(
				        'post_type' => 'post',
				        'cat' => 5
				    );

				// The Query
				$the_query = new WP_Query( $args );

				// The Loop
				if ( $the_query->have_posts() ) :
					
					while ( $the_query->have_posts() ) : $the_query->the_post();

						echo '<div class="col-md-4 sm-6">';
                        echo '<div class="grid">';
						echo '<figure class="effect-chico">';																	
						echo ''.the_post_thumbnail().'';
                        echo '<figcaption>';
                        echo '<h2>Warm <span>';
                        the_title();
                        echo '</span></h2>';
                        echo '<p>';
                        the_excerpt();
                        echo '</p>';
                        echo '<a href="';
                        the_permalink();
                        echo '">View more</a>';
                        echo '</figcaption>';						
						echo '</figure>';
                        echo '</div>';
                        echo '</div>';
						

                        /*<figure class="effect-oscar">
                            <img src="img/9.jpg" alt="img09"/>
                            <figcaption>
                                <h2>Warm <span>Oscar</span></h2>
                                <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                                <a href="#">View more</a>
                            </figcaption>           
                        </figure>

                        echo '<div class="col-md-4 col-sm-6">';
                        echo '<a href="'.get_permalink().'">';   
                        echo ''.get_the_content().'';
                        echo '</a>';
                        echo '</div>';*/				

					/* Restore original Post Data */
					endwhile; endif; wp_reset_postdata();
					
				
			?>  
			 </div>          
       </div>
       <!-- /.row -->

      

       <section class="bg-parallax-1">
                 <div class="container">                   
                   <div class="row">
                     <div class="col-xs-12 col-md-10 col-md-offset-1">
                      <h1 class="text-white">Success</h1>
                       <p class="h3 text-light">Developing a small company into a successful one may seem problematic. But we know how to achieve it.</p>
                     </div>
                   </div>
                 </div>
               </section>

        <!-- Features Section -->
        <div class="row wrapper">
            <div class="col-lg-12">
                <h2 class=""></h2>
            </div>
            <div class="row">

                <div class="col-md-8">
                    <div class="panel panel-default " id="announcement-panel">
                        <div class="panel-heading text-center">
                           <h3 class="panel-title">Announcements</h3>
                        </div>
                        <div class="panel-body" id="announcement-list">
                            <div class="bs-callout bs-callout-danger">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                         <img class="media-object" src="http://placehold.it/64x64" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Start Bootstrap
                                            <small>August 25, 2014 at 9:30 PM</small>
                                        </h4>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>                     
                            </div>
                            <div class="bs-callout bs-callout-danger">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                         <img class="media-object" src="http://placehold.it/64x64" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Start Bootstrap
                                            <small>August 25, 2014 at 9:30 PM</small>
                                        </h4>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>                     
                            </div>  
                            <div class="bs-callout bs-callout-danger">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                         <img class="media-object" src="http://placehold.it/64x64" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Start Bootstrap
                                            <small>August 25, 2014 at 9:30 PM</small>
                                        </h4>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>                     
                            </div>  
                            <div class="bs-callout bs-callout-danger">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                         <img class="media-object" src="http://placehold.it/64x64" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Start Bootstrap
                                            <small>August 25, 2014 at 9:30 PM</small>
                                        </h4>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>                     
                            </div>  
                            <div class="bs-callout bs-callout-danger">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                         <img class="media-object" src="http://placehold.it/64x64" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Start Bootstrap
                                            <small>August 25, 2014 at 9:30 PM</small>
                                        </h4>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>                     
                            </div>  
                            <div class="bs-callout bs-callout-danger">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                         <img class="media-object" src="http://placehold.it/64x64" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Start Bootstrap
                                            <small>August 25, 2014 at 9:30 PM</small>
                                        </h4>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>                     
                            </div>  
                            <div class="bs-callout bs-callout-danger">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                         <img class="media-object" src="http://placehold.it/64x64" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Start Bootstrap
                                            <small>August 25, 2014 at 9:30 PM</small>
                                        </h4>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>                     
                            </div>                         
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                <!-- Make Link Available on Hover one by one -->
                   <div class="grid">
                   <figure class="effect-chico">';                                                                   
                   <img src="<?php bloginfo('template_url'); ?>/images/birthdays.png" class="event-photo" alt="">
                   <figcaption>
                   <h2>Employee <span>Birthdays</span></h2>
                   <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                   <a href="#">View more</a>
                   </figcaption>                       
                   </figure>
                   </div>
                </div>
                <div class="col-md-4">
                    <div class="grid">
                    <figure class="effect-chico">';                                                                   
                    <img src="<?php bloginfo('template_url'); ?>/images/events.png" class="event-photo" alt="">
                    <figcaption>
                    <h2>Event <span>Photos</span></h2>
                    <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                    <a href="#">View more</a>
                    </figcaption>                       
                    </figure>
                    </div>
                </div>
            </div>
            
            
        </div>
        <!-- /.row --> 
    

        <!-- Portfolio Section -->
        <div class="row wrapper" >

            
            <div class="col-md-4 col-sm-6">
            <!-- Make Link Available on Hover one by one -->
               <div class="grid">
               <figure class="effect-chico">';                                                                   
               <img src="<?php bloginfo('template_url'); ?>/images/employee-corner.png" alt="">
               <figcaption>
               <h2>Employee <span>Corner</span></h2>
               <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
               <a href="#">View more</a>
               </figcaption>                       
               </figure>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="grid">
                <figure class="effect-chico">';                                                                   
                <img src="<?php bloginfo('template_url'); ?>/images/conference-room.png" alt="">
                <figcaption>
                <h2>Conference <span>Rooms</span></h2>
                <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                <a href="#">View more</a>
                </figcaption>                       
                </figure>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <!-- COMBINE USEFUL LINKS AND INFORMATION DIRECTORY -->
                <div class="grid">
                <figure class="effect-chico">';                                                                   
                <img src="<?php bloginfo('template_url'); ?>/images/useful-links2.png" alt="">
                <figcaption>
                <h2>Useful <span>Links</span></h2>
                <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                <a href="#">View more</a>
                </figcaption>                       
                </figure>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <!-- COMBINE USEFUL LINKS AND INFORMATION DIRECTORY -->
                <div class="grid">
                <figure class="effect-chico">';                                                                   
                <img src="<?php bloginfo('template_url'); ?>/images/molecular-minute.png" alt="">
                <figcaption>
                <h2>Molecular<span>Minute</span></h2>
                <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                <a href="#">View more</a>
                </figcaption>                       
                </figure>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <!-- COMBINE USEFUL LINKS AND INFORMATION DIRECTORY -->
                <div class="grid">
                <figure class="effect-chico">';                                                                   
                <img src="<?php bloginfo('template_url'); ?>/images/hiyari-hatto.png" alt="">
                <figcaption>
                <h2>Hiyari<span>Hatto</span></h2>
                <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                <a href="#">View more</a>
                </figcaption>                       
                </figure>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <!-- COMBINE USEFUL LINKS AND INFORMATION DIRECTORY -->
                <div class="grid">
                <figure class="effect-chico">';                                                                   
                <img src="<?php bloginfo('template_url'); ?>/images/gold-standard.png" alt="">
                <figcaption>
                <h2>Gold <span>Standard</span></h2>
                <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                <a href="#">View more</a>
                </figcaption>                       
                </figure>
                </div>
            </div>

        </div>
        <!-- /.row -->

       

        <hr>

        <!-- Call to Action Section -->
        <div class="well wrapper">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>



<?php get_footer(); ?>