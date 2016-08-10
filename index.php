<?php get_header(); ?>
   
    <div>
        
        <div class="row slider-div">
            <?php masterslider(1); ?>
        </div>
       <!-- Big 3 Icon Section -->
       <div class="row">
			
			<div class="wrapper" style="margin-top: 10px;">              
			
			<?php 

				$args = array(
				        'post_type' => 'post',
				        'cat' => 13,
                        'orderby'        => 'title',
                        'order'          => 'ASC'
				    );

				// The Query
				$the_query = new WP_Query( $args );

				// The Loop
				if ( $the_query->have_posts() ) :
					
					while ( $the_query->have_posts() ) : $the_query->the_post();

						echo '<div class="col-md-4 sm-6">';
                        echo '<div class="hovereffect">';
						echo '<img class="img-responsive" src="'.the_post_thumbnail().'">';																	
						
                        //echo '<h2>Warm <span>';
                        //the_title();
                        echo '<div class="overlay">';
                        echo '<h2>';
                        the_excerpt();
                        echo '</h2>';                        
                        echo '<a class="info" href="';                       
                        if($post->ID == 296){
                            bloginfo('template_url');
                            echo '/pdfs/kaizen_intake_form.pdf';
                            echo '" target="_blank"';
                        } elseif($post->ID == 322){
                           
                           echo 'http://www.focusedandcreative.com/think-tank';
                           echo '" target="_blank"';
                        } else{
                            the_permalink();                        
                            echo '?post_id=';
                            echo $post->ID; 
                        }
                        
                        echo '">View more</a>';
                        echo '</div>';					
						
                        echo '</div>';
                        echo '</div>';
						
                        /*
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="hovereffect">
                                    <img class="img-responsive" src="http://placehold.it/350x200" alt="">
                                    <div class="overlay">
                                       <h2>Hover effect 1v2</h2>
                                       <a class="info" href="#">link here</a>
                                    </div>
                                </div>
                            </div>
                        */
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

                            <?php 

                                $args = array(
                                        'post_type' => 'post',
                                        'cat' => 4,
                                        'orderby'        => 'date',
                                        'order'          => 'ASC'
                                );

                                // The Query
                                $the_query = new WP_Query( $args );

                                // The Loop
                                if ( $the_query->have_posts() ) :
                                    
                                    while ( $the_query->have_posts() ) : $the_query->the_post();


                            echo    '<div class="bs-callout bs-callout-danger">';
                            echo    '<div class="media">';
                           
                            echo        '<div class="media-body">';
                            echo            '<h4 class="media-heading">';
                                                the_title();
                            echo            '  <small>';
                                                the_date();
                            echo            ' at ';
                                                the_time();         
                            echo            '</small>';
                            echo            '</h4>';
                                            the_excerpt();
                            echo    '<a href="';
                            the_permalink();                        
                            echo    '?post_id=';
                            echo        $post->ID;
                            echo    '">View more</a>';  
                            echo    '</div>';
                            echo    '</div>';                   
                            echo    '</div>';
                                   

                            endwhile; endif; wp_reset_postdata();?>  

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