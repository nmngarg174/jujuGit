<?php 

//include('html_encoder_1.9.php'); 
error_reporting(0);
		
	session_start(); 
	
	if(isset($_SESSION['name'])){
		
		$username=$_SESSION['name'];  
	}
	
	if($username==''){
		header('Location:start.html'); 
	}
	//echo $username; 
	
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JuJu's Cafe</title>
	
     <link href="css/grayscale.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
   

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	
    
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main_gray.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
        
</head>

<style>
    .welcome{
        -webkit-animation-duration:1s;
        /* -webkit-animation-iteration-count:; now using the wow effects here */
        -webkit-animation-delay:.1s;
    }
    }
</style>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top animated fadeInDown" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="glyphicon glyphicon-glass"></i>  <span class="light">JuJu's</span> Cafe
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Juju</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="newOrderA.php?log=in">Current Orders</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="newTakeOrder.php?log=in">Take An Order</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="newFulfilled.php?log=in">Orders Delivered</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="newAdd.php?log=in">Add</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="newjujuGall.php">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="logOut.php?log=logout">Log-Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro" style="background:url(images/slider/newBg1.jpg)">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading wow animated fadeInUp welcome" >Welcome To Juju's</h1>
                        <p class="intro-text animated fadeInDown">A Place To Eat Play And Share !!</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row" style="position:relative ; top:-110px;">
            <div class="col-lg-8 col-lg-offset-2 wow animated fadeInDown " data-wow-delay="0.2s">
                <h2>About JuJu's</h2>
                <p>Juju's is India's favourite coffee shop for the young and the young at heart. Popularly known as juju, we strive to provide the best experience to our guests. To put it plainly, we brought in the concept of cafes to India (this is where you thank us!) having same prices and games to play.</p>
                <p>The first one opened in 1996 on Brigade Road in Bangalore and continues to be one of the most happening places in the city. The young and the young at heart immediately took to the place. A smart, simple space that they could call their own for a while… sit down, talk and listen to conversations, hold short meetings or even have a lot of good fun…all over steaming cups of coffee. CCD today is totally in tune with its target audience.</p>
                <p>It's been an exciting journey till now, moving forward to become the largest organized retail cafe chain in the country.</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>View Our Gallery</h2>
                    <p>You can view all the events happenings at JUJU's with album we share</p>
                    <a href="newjujuGall.php" class="btn btn-default btn-lg">Visit Gallery Page</a>
                </div>
            </div>
        </div>
    </section>

    
     <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Recent Works</h2>
                <p class="lead">Jujus on the way to become the largest cafe chain across North-India</p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item1.jpg" height="290" width="220" >
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">JuJu's Cafe Chandigarh</a> </h3>
                                <p>Quality gets never out of Taste !!</p>
                                
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item2.jpg" alt="" height="290" width="220">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">The Enterance</a></h3>
                                <p>Have a great time with pals and family !!</p>
                                                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item3.jpg" alt="" height="290" width="220">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Cheers !! </a></h3>
                                <p>Try out the moctails never tasted before !!</p>
                                
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item4.jpg" alt="" height="290" width="220">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Happy New Year </a></h3>
                                <p>Celebrate all your moments with us all !!</p>
                                
                            </div> 
                        </div>
                    </div>
                </div>   
                
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item5.jpg" alt="" height="290" width="220">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Wanna Order Something ?</a></h3>
                                <p>A place close to being home !! </p>
                                
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item6.jpg" alt="" height="290" width="220">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Nice infrastructure </a></h3>
                                <p>Try us out !! its great !! </p>
                                
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item7.jpg" alt="" height="290" width="220">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">We are expanding !!</a></h3>
                                <p>Opening across various places and campus !!</p>
                                
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="images/portfolio/recent/item8.jpg" alt="" height="290" width="220">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Feeling lazy !!</a></h3>
                                <p>Give us a call and we will deliver right at your doorstep !!</p>
                                
                            </div> 
                        </div>
                    </div>
                </div>   
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/wow.min.js" ></script>

    <script type="text/javascript">
        new WOW().init(); 
    </script>
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/staticmap?center=40.714728,-73.998672&zoom=14&size=640x640&key=AIzaSyDXSw9155vXJV-lLAomQNhWWL1i3tKcSaM"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
	<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(30.3532934 , 76.3637091);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:17,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("map"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  icon:'pinkball.png'
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

</body>

</html>
