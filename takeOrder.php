<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>About Us | Corlate</title>
	
	<!-- core CSS -->
    <link href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/css/prettyPhoto.css" rel="stylesheet">
    <link href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/css/animate.min.css" rel="stylesheet">
	<link href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/css/main.css" rel="stylesheet">
    <link href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/css/responsive.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<script src="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/visualNav-master/js/jquery.visualNav.js"></script>
	
   <script>
   
	$(document).ready(function(){
		$('#sidemenu').visualNav(
		{
		     	
		}
		);
	});
	
	</script>
    
<?php 
 	
	session_start();
	
	// verify the session here
	
	$log=$_REQUEST['log'];
	
	error_reporting(0); 
	
	if($log=='logout'){
		unset($_SESSION['name']); 
		unset($_SESSION['cart']);
	//	unset($_SESSION['cart']); 
//		header("Location:login1.php");  
	}
	
	$name=$_SESSION['name']; 
	
	// find the value for the name here
	// create a logout button here and use it here
	if(empty($name)){
	//	header("Location:login1.php"); 
	}
	
	$mysqli=new mysqli('localhost','root','','a9748231_user');
	
	if(isset($_GET['page'])){
		
		$pages=array("products","cart");
		
		if(in_array($_GET['page'],$pages)){
		
		$_page=$_GET['page']; 
			
		}else{
			
			$_page='products'; 	
		}
		
	}else{
		
		$_page='products'; 
	}
 
?>


<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/index.html"><img src="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/index.html">Home</a></li>
                        <li class="active"><a href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/about-us.html">About Us</a></li>
                        <li><a href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/services.html">Services</a></li>
                        <li><a href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/portfolio.html">Portfolio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/blog-item.html">Blog Single</a></li>
                                <li><a href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/pricing.html">Pricing</a></li>
                                <li><a href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/404.html">404</a></li>
                                <li><a href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/blog.html">Blog</a></li> 
                        <li><a href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/contact-us.html">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
	</header><!--/header-->

    <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>Take Order</h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
			</div>
			
			<!-- about us slider -->
			<?php //echo ucwords($category) ?></h3></td>
             
             
             </tr>
             <div class="row">
             <div id='<?php echo strtolower($category)?>'>
             
             <h3 style="position:relative;left:100px;"><?php echo ucwords($category)?></h3>
             </div>
            <?php
			
			
			
			while($row=$res->fetch_array()){
			// display all the values here 
			//echo $row[2];
			//echo 'connected!!';
	 
			if($category==$row[2]){
			$i+=1;
			//echo 'true';  
			
	    		
			
?>
		

                    <div class="col-md-4">
                        <div class="thumbnail" style="height:260px; width:170px; margin:0 5px 5px 30px; position:relative;left:40px; ">
                            <?php echo '<img class="img-rounded" style="height:100px; width:100px;" src="data:image/jpeg;base64,'.base64_encode( $row['images'] ).'"/>' ?>
                            <div class="caption">
                                <h4 class="pull-right">Rs 50</h4>
                                <h4><a href="#"><small><?php echo $row[1] ?></small></a>
                                </h4>
                                <p><a href="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/shopping.php?page=products&log=in&action=add&id=<?php echo $row[0]; ?>">Add To cart</a></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

				

<!--
                 <tr> 
                 	<td><?php //echo $row[1] ?></td>
                    <td><?php //echo $row[3] ?></td>
                    <td><?php //echo $row[2] ?></td>
                    <td><?php //echo '<img class="img-rounded" style="height:100px; width:100px;" src="data:image/jpeg;base64,'.base64_encode( $row['images'] ).'"/>' ?></td>

                    <td><a href="shopping.php?page=products&log=in&action=add&id=<?php //echo $row[0]; ?>">Add To cart</a></td>
                 </tr>
    -->             
            
    <?php 
			}else{
				$category=$row[2]; 
				break; 
			}
		}
	  
	?>     
       </div>
            </table>
               
            </div>
            </section>
			
			
			<!-- Our Skill -->
		<!--	<div class="skill-wrap clearfix">
			
				<div class="center wow fadeInDown">
					<h2>Our Skill</h2>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
				</div>
				
				<div class="row">
		
					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="joomla-skill">                                   
								<p><em>85%</em></p>
								<p>Joomla</p>
							</div>
						</div>
					</div>
					
					 <div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="html-skill">                                  
								<p><em>95%</em></p>
								<p>HTML</p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
							<div class="css-skill">                                    
								<p><em>80%</em></p>
								<p>CSS</p>
							</div>
						</div>
					</div>
					
					 <div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
							<div class="wp-skill">
								<p><em>90%</em></p>
								<p>Wordpress</p>                                     
							</div>
						</div>
					</div>
					
				</div>
	
            </div><!--/.our-skill-->
			

			<!-- our-team -->
		<!--	<div class="team">
				<div class="center wow fadeInDown">
					<h2>Team of Corlate</h2>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
				</div>

				<div class="row clearfix">
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man1.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Jhon Doe</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul>
									
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
			<!--				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div><!--/.col-lg-4 -->
					
					
				<!--	<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man2.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Jhon Doe</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
					<!--		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div><!--/.col-lg-4 -->					
				<!--</div> <!--/.row -->
				<!--<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->       

				<!--<div class="row clearfix">   
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man3.jpg" alt=""></a>
								</div>

								<div class="media-body">
									<h4>Jhon Doe</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
					<!--		<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man4.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Jhon Doe</h4>
									<h5>Founder and CEO</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
										<li class="btn"><a href="#">Photoshop</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
						<!--	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</div>
				</div>	<!--/.row-->
			<!--</div><!--section-->
		<!--</div><!--/.container-->
<!--    </section><!--/about-us-->
	
    <!--<section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

<!--                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

    <!--            <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

        <!--        <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
           <!-- </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    

    <script src="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/js/jquery.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/js/bootstrap.min.js"></script>
    <script src="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/js/jquery.prettyPhoto.js"></script>
    <script src="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/js/jquery.isotope.min.js"></script>
    <script src="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/js/main.js"></script>
    <script src="../../../../Users/princEvil/Desktop/project/boostrap/finalTemp/corlate-free-responsive-business-html-template(1)/js/wow.min.js"></script>
</body>
</html>