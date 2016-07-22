<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php wp_title(' | ', true, 'right'); bloginfo('name');?></title>

    <!-- Custom CSS -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
   
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/engine1/jquery.js"></script>    <script src="https://www.youtube.com/iframe_api"></script>
    <?php wp_head(); ?>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('url'); ?>">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">Home</a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">IT <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="full-width.html">Submit Ticket</a>
                            </li>
                            <li>
                                <a href="sidebar.html">IT New Hire Request</a>
                            </li>                            
                            <li>
                                <a href="sidebar.html">Request a Custom Requisition</a>
                            </li>                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">HR <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="full-width.html">Short Term Disability</a>
                            </li>
                            <li>
                                <a href="sidebar.html">Application for FMLA</a>
                            </li>                            
                            <li>
                                <a href="sidebar.html">Ethics Point</a>
                            </li>  
                                                        
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Operations <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">Education Core</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">Client Services</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">Purchasing</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">Business Operations</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Specimen Management Division</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Genetic Counselors</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Kaizen</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Policies and Procedures</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" >Marketing</a>                        
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quality Management <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="full-width.html">Submit Incident</a>
                            </li>
                            <li>
                                <a href="sidebar.html">Licensing and Certifications</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee Search <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="input-group">
                                     <input type="text" class="form-control col-md-6"  placeholder="Employee Search" >
                                     <span class="input-group-addon" id="employee-search-icon">
                                         <button type="submit">
                                             <span class="glyphicon glyphicon-search"></span>
                                         </button>  
                                     </span>
                                 </div>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    