<?php 
 	
	session_start();
	
	// verify the session here
	
	$log=$_REQUEST['log'];
	
	error_reporting(0); 
	
	if($log=='logout'){
		unset($_SESSION['name']); 
		unset($_SESSION['cart']);
	//	unset($_SESSION['cart']); 
		//header("Location:login1.php");  
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

<style>

.jumbotron {
	
	background-color:black; 
	opacity:1; 	
	color:black;	
}
.no{
	color:black;	
	opacity:1;
}

.put{
	margin-left:2px; 
	 	
	color:white; 
	font-size:18px;
}


.btn btn-default{
	
	position:relative; 
	float:left;  
	color:white; 
	margin-left:80%; 
	margin-bottom:50px; 
	font-size:18px;	
}
</style>


<style> 

a{
	color:#48577D; text-decoration:none; 
}

a:hover{
	text-decoration:underline; 	
}

body{
	
	font-family:verdana; 
	font-size:12px;
	color:#444;  
}

h1,h2{
	margin-bottom:15px; 	
}

h1{
	font-size:18px; 
	font-size:14px; 	
}

/*
#container{
	width:700px; 
	margin::150px auto; 
	backgroung-color:#eee; 
	padding:15px; 	
	overflow:hidden; 
}
*/
#main{
	width:490px; 
	float:left; 	


}

#main table{
	width:480px; 
		
}

#main table th{
	padding:10px; 
	background-color:#485770; 
	color:#fff; 
	text-align:left; 	
}

#main table td{
	padding:5px ; 	
}

#sidebar{
	width:200px ; 
	float:left; 	
}

</style>


    
<style> 	
	
	.sidemenu { position: fixed;  left: 10px; background: white; width: 120px; top:89px; }
		
	.sidemenu li { margin: 5px; padding: 5px; ; text-align: left; }
	.sidemenu li.selected { background: white; }
	.sidemenu a { text-decoration: none; color: #bbbbff; }
	.sidemenu a:hover { color: #fff; }
	ul{
		list-style-type:none; 	
	}
	
	.shift{
		position:fixed; 
		top:170px;	
	}
	
	
</style>



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
	<link rel="stylesheet" href="css/style.css">
    <!-- Custom CSS -->
   

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	
    
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main_gray.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" >

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top wow fadeInDown animated" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                
                <a class="navbar-brand page-scroll" href="#page-top" style="color:#696">
                    <i class="glyphicon glyphicon-glass"></i>  <span class="light" style="color:#696">JuJu's</span> Cafe
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav" >
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden" >
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="indexNew.php" style="color:#696">Juju</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download" style="color:#696">Current Orders</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#recent-works" style="color:#696">Take An Order</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#map" style="color:#696">Orders Delivered</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="login1.php" style="color:#696">Add</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="login1.php" style="color:#696">Balance Sheet</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="login1.php" style="color:#696">Log-Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	
    <section id="about-us "  >
    
        <div class="container " style="position:relative; top:40px;"  >
			<div class='center hidden-xs wow fadeInDown animated'>
				<h2 style="color:#696">Menu</h2>
				<p class="lead" style="color:#696"><br>Gourmet is ready to be served</p>
			</div>
			
			<!-- about us slider -->
			
            <div class="container animated fadeIn" > 
                	<div class='col-md-1'> 
                    
                    <div class="sidemenu " id="sidemenu" data-wow-duration="1000ms" data-wow-delay="600ms">
                  
                    <h5>Categories</h5>
                    <ul class='nav nav-pills nav-stacked'>
                    	<li><a href='#wrap'>Wraps</a></li>
                        <li><a href='#burger'>Burger</a></li>
                        <li><a href='#caffe'>Caffe</a></li>
                        <li><a href='#juice'>Juices</a></li>
                        <li><a href='#frappe'>Frappe</a></li>
                        <li><a href='#icetea'>IceTea</a></li>
                        <li><a href='#icecream'>IceCream</a></li>
                        <li><a href='#maggi'>Maggi</a></li>
                        <li><a href='#pasta'>Pasta</a></li>
                        <li><a href='#pepsi'>Pepsi</a></li>
                        <li><a href='#sandwich'>Sandwiches</a></li>
                        <li><a href='#ontherocks'>OnTheRocks</a></li>
                        <li><a href='#lite'>Lite</a></li>
                        
                        
                          
                    </ul>
                    
                    </div>
               	  </div>
             	         
           		  <div class='col-md-9'> 
									
                                    
                                    
                                  
     			
	<!--<div id=container style="margin-left:340px;">  -->
		<!--<h1>Product List</h1>-->    	
        		<div id=''  data-wow-duration="1000ms" data-wow-delay="1100ms">
        
       					 <?php require($_page.".php") ; ?> 
        	
      	  </div>
        <!--
        <a href='home.php?log=logout'>Log Out </a><br /> -->
        
        
        <!--<div id='sidebar'>-->
        		<!-- insert the cart code here-->
                        	
   							 </div>
                             
                             
                  <div class="col-md-2">
                  		
                  <div class="shift animated fadeIn" ><span class="put"><a href='../../../Users/princEvil/Desktop/project/www.juju.in'><img src="images/juju.jpg"/></a></span> 
    
                <h4>Juju Cart</h4>
                
                <?php 
                if(isset($_SESSION['cart'])){
                	
					$sql_c="select * from products1 where id in ("; 
					
					foreach($_SESSION['cart'] as $id=>$value){
						$sql_c.=$id.",";
					}
					
					// subtract the comma from the end here
					$sql_c=substr($sql_c,0,-1).") order by id asc"; 
					
				//	echo $sql_c; 
					
					// print all the items in the cart here 
					
					$result=$mysqli->query($sql_c);
					 
					if($result->num_rows>0){
						
						while($row=$result->fetch_array()){
							// print all the values of the cart here
							?>
                            
                            <p> <?php  echo $row['name'] ?> x <?php  echo $_SESSION['cart'][$row['id']]['quantity'] ?> </p>
                            <?php
							
						}
						 // draw the line 
						?>
                        
                                               
                        <hr /> 
                        
                        <a href='cart.php' >Go to the cart page </a>
                        
                        <?php
					}
					
                }else{
					echo 'Your cart is empty. Please add some products..'; 	
				}
				
				?>
       <!-- </div> -->
       <br />
       <br />
       <br />
       <br />
       			          <a href='search.php?log=logout'><button class='btn btn-danger' style="float:right;" name='log'>Log Out</button></a>
      
        </div>
                    		
      
                
               
                
                
                			    </div>
                    
   		      </div>
</div>
                    
                 
                 
            

			
	
</section>
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
