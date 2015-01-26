<?php
	
	// include the auto scroll feature into the php projct 
	//create a log out session here 
	error_reporting(0); 
	$pageNew = $_SERVER['PHP_SELF'];
	$pageNew.='?log=in';
	$sec = "240";
	header("Refresh: $sec; url=$pageNew");
	if(isset($_GET['submit'])){
			//send the confirmation mail to the person 
			
			$to=$_POST['email'];
			//echo $to; 
			
			$message1=$_POST['message']; 
			//echo $message1; 
			$from='nmngarg174@gmail.com'; 
			$subject='JUJU Order Confirmation';
	
   	 $header='From:nmngarg174@gmail.com \r\n';
	
	 $header.='Cc:nmngarg174@gmail.com \r\n';
	
	 $header.='MIME-Version:1.0 \r\n';
	 
	 $header.='Content-type:text/html \r\n'; 
	 
	 $retval=mail($to,$subject,$message1,$header);
	 
	 //echo 'mail sent';
	 
	 // after sending the mail change the status of that order to sent ie 1
			
	 $sqlStatus='update  cart_online set status=1 where email="'.$to.'"'; 
	 
	 $mysqli=new mysqli('localhost','root','','a9748231_user'); 
	 
	 if($mysqli->query($sqlStatus)){
			 
	 }
	}
	
	session_start(); 
	//$log=''; 
	$log=$_REQUEST['log']; 
	//error_reporting(0); 
	if($log=='logout'){
		unset($_SESSION['name']); 
		unset($_SESSION['cart']); 
		session_destroy() ;
		header("Location:login1.php"); 	
	}
	
	$name=$_SESSION['name']; 
	
	if(empty($name)){
		header("Location:login1.php"); 	
	}
	
	//securtiy check is performed now display the tables and the navigation bar ..
	
	// using pagination to display the google like results 
	
	$page=1; 
	
	//create connection with mysql 
	
	$mysqli=new mysqli('localhost','root','','a9748231_user');
	 $sql='select * from order1 where status=0'; 
	 
	 $result=$mysqli->query($sql);
	 $count=$result->num_rows; 
		  
	 $last=ceil($count/$page); 
	 // pageNum gives the total no. count of all the pages and now to show them 
	 // store the current page no. also here 
	 if(isset($_GET['pgNum']) && $_GET['pgNum']>1)
	 	$curPage=$_GET['pgNum'];
		else{
		$curPage=1;  	
	 }
	 //echo $_GET['pgNum'];  
	 //echo $curPage; 
	 // starting at some record here and then or also we have here
	  
	 $limit='limit '.(($curPage-1)*$page).','.$page;
	// echo $limit;  
	$sqlNew='select * from cart_online where status=0 order by price desc $limit ';
	 $sql1="select * from cart_online where status=0  order by bill desc $limit "; 
		//echo $sql1;
	 // use the query to generate the results relevant to the page 
	 //echo $sql1; 
	 $result=$mysqli->query($sql1);
	// echo 'connected'; 
	 
		 	
			// print the result in the google format 
			// display the Price , time of order , time elapsed since the order , name of the 
			// person and make a modal box to confirm the order sent , by sending a email and 
			// name of the employee through which order had been sent 
			// displaying the values here 
		//	echo 'connected'; 
		//	echo $row[1].' Date:'.$row[4] ;
		//	echo 'Address:'.$row[2].' Order:'.$row[3];
?>	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>About Us | Corlate</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

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
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="about-us.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li> 
                        <li><a href="contact-us.html">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
	</header><!--/header-->

    <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>Orders Placed</h2>
				<p class="lead">Take a look at all the<br> Orders placed from the JuJu's Android Application</p>
			</div>
			
			<!-- about us slider -->
		<div class='container-fluid' >
                
                <div class="col-md-6">
                
          <!--<form role='form' style="width:40%; margin-left:30%; float:left; "id='remove2 '>

				<div class='form-group'>                
<select class='form-control' name="drop" id="drop" onchange="dynamic_select(this.value)"  >

	<option value=" ">Select Filter</option>
	<option value="name">Name</option>
	<option value="price">Price</option>
	<option value="date1">Date</option>
	
		</select>
	</div>
</form>-->
	<?php
	$i=1;
		while($row=$result->fetch_array()){
			$arr1=explode(" ",$row[2]); 
			  
    	$arr=explode('-',$arr1[0]);
		
	?>		
		
        	<div class='row'>
        <ul id="plans" style="background: rgba(255,255,255,0.90);
	border-radius:20px 20px 20px 20px;

	">
    
    <div class="thumbnail " style="position:relative;  data-wow-duration="1000ms" data-wow-delay="1000ms"">
			<li class="plan" >
				<ul class="planContainer" style="position:relative;top:12px; ">
                	
					<li class="title"><h2 style="padding-left:5px;">Order <?php echo $row[5] ?></h2></li>
					<li class="price" "><p style="padding-left:5px;">Total Bill: Rs<?php echo $row[1]?></p></li>
					<li>
						<ul class="options">
							<li style="padding-left:5px;">Customer <span><?php echo ucfirst($row[0])?></span></li>
							<li style="padding-left:5px;">Placed On: <span><?php echo date('d-F ,Y ',mktime(0,0,0,$arr[1],$arr[2],$arr[0])) ?></span></li>
							<li style="padding-left:5px;">Address: <span><?php echo $row[3] ?></span></li>
							<li style="padding-left:5px;">Contact: <span><?php echo $row[8]?></span></li>
							
						</ul>
					</li>
					<li class="button" style="padding-left:5px;"><a href="#" data-toggle='modal' data-target='#basicModal<?php echo $row[0]?>' style="padding-left:5px;"> Send Mail Confirmation</a></li>
                    <li class="button" style="padding-left:5px;"><a href="#" data-toggle='modal' data-target='#basicModal<?php echo $row[5]+2 ?>' style="padding-left:5px;"> View Order Details</a></li>
                    
				</ul>
                
			</li>
            </div>
            </ul>
            
			<!--<h4>OrderId: <?php //echo $row[5]; ?></h4>	
        	<h5 style="color:#b0b0b0;"><u><?php //echo strtoupper($row[0]).' Order Placed On '.date('d-F ,Y ',mktime(0,0,0,$arr[1],$arr[2],$arr[0])).' Its been '.round((time()-mktime(0,0,0,$arr[1],$arr[2],$arr[0]))/(24*60*60)).' days since the order placed' ?></u></h5>
            <small style="color:#b0b0b0;"><?php echo 'Address:'.$row[3].' Order:'.$row[3] ; 
			$a=$row[0]; 
			$b=$row[1]; 
			$c=$row[6]; 
			?></small>
            <br />
            -->
            
            <!--<a href='#' class="button" data-toggle='modal' data-target='#basicModal<?php //echo $row[0]?>'>
            
            Send Delivery Mail
            </a>-->
            
        <div class="modal fade" id="basicModal<?php echo $row[0]?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">CLOSE</button>
            <h4 class="modal-title" id="myModalLabel">JuJu OrderConfirmation Mail</h4>
            </div>
            <div class="modal-body">
                <h3>Mail Message</h3>
                <form class="form-horizontal" role="form" action="home.php?log=in&&submit=1" method="post">
  <div class="form-group">
  <label class="control-label col-sm-2" for="name">To:</label>
    <div class="col-sm-10">
      <input type="text" name='to' class="form-control" id="to" placeholder="Enter email" value=<?php echo strtoupper($a) ?>>
      
    </div>
    
    </div>
    
    
    <div class='form-group'>
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" name='email' class="form-control" id="email" placeholder="Enter email" value=<?php echo $c ?>>
      </div>
    </div>
    <div class='form-group'>
    <label class="control-label col-sm-2" for="message"> Message:</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="comment" row='5' name='message' placeholder="Enter message" ><?php 
	  $message='Dear '.ucfirst($a).' ,
	  Your order for has been confirmed and is out for delivery ,Kindly arrange the cash for payment of  Rs.'.$b;
	  echo $message ?>
      
      </textarea>
      
    </div>
  </div>
  	
  	        <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel Mail</button>
                <button type="submit" class="btn btn-default">Send The Confirmation</button>
        </div>
        </form>
                
                
            </div>
      
    </div>
  </div>
</div>
<!--
<a href='#' class="btn btn-default" data-toggle='modal' data-target='#basicModal<?php echo $row[5]+2 ?>'>
            
            Show Order Details
            </a>-->
        <div class="modal fade" id="basicModal<?php echo $row[5]+2 ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">CLOSE</button>
            <h4 class="modal-title" id="myModalLabel">Customer Order Details</h4>
            <h4>Customer <?php echo ucfirst($row[0]) ?></h4>
            
            </div>
            <div class="modal-body">
            
                <h3>Order Placed</h3>
                <?php
				 	
					// creating  a new connection to display quantity of all the items in db
					
					// get the oid of the following customer here
					
					$sqlOrder="select p.*,p1.name,p1.category from product_online p,products1 p1 where p.oid='".$row[5]."' and p.id=p1.id "; 
				 
				 $mysqli1=new mysqli('localhost','root','','a9748231_user');
				 
				 $result1=$mysqli1->query($sqlOrder);
				 
				 while($row2=$result1->fetch_array()){
					 
				 
				   
				 ?>
                 
                <ul class="list-group">
   					<li class="list-group-item"><span class="badge" style="position:relative; left:10px; top:-1px;">Quantity <?php echo $row2[2] ?></span><?php echo $row2[3]?></li>
   				<?php }
				
				?>	
                <li class="list-group-item">Total Bill:<?php echo $row[1]?></li>
			</ul>
                
                
                
            </div>
      <div class="modal-footer">
            <h4>Address :<?php echo ucfirst($row[3]) ?></h4>
           <!-- <h3>Email: <?php //echo $row[6] ?></h3>-->
            <h4>Order Date: <?php echo ucfirst($row[2]) ?></h4>
                
        </div>
    </div>
  </div>
</div>

    <!--<button type='button' class='btn btn-default'>
            Send Cancellation Mail
            </button>-->
                </div>	<br />
			 	
            <?php
			//display the contents above using the section tag for each row
	 }
	 		$paginationCtrls=''; 
			
			if($last!=1){
					if($curPage>1){
						$previous=$curPage-1;
						//printing the previous page link here 
						$paginationCtrls.='<a href="'.$_SERVER['PHP_SELF'].'?log=in&&pgNum='.$previous.'">Previous</a> &nbsp &nbsp';
						
						// displaying the previous 4 pages here
						//echo 'print'; 
						for($i=$curPage-4;$i<$curPage;$i++){
							
							if($i>0){
								// attach the pages here	
								$paginationCtrls.='<a href="'.$_SERVER['PHP_SELF'].'?log=inpgNum='.$i.'">'.$i.'</a> &nbsp';
								
								 
							}
						}
					}
					
					$paginationCtrls.=''.$curPage.'&nbsp;'; 
					
					
					for($i=$curPage+1;$i<$last;$i++){
						
						// vsry the ctrl section 
						
						$paginationCtrls.='<a href="'.$_SERVER['PHP_SELF'].'?log=in&&pgNum='.$i.'">'.$i.'</a> &nbsp'; 
						if($i>$curPage+4)
							break; 
							
					}
					// include the next page option here when there is only 1 page or multiple pages 
					
					if($curPage!=$last-1){
						
					$next=$curPage+1; 
					$paginationCtrls.='<a href="'.$_SERVER['PHP_SELF'].'?log=in&&pgNum='.$next.'">NEXT</a> &nbsp;';
					
					}
					echo $paginationCtrls;
					 
				}
			
			
			?>
		
	
            </div >
            <div class='' data-wow-duration="1000ms" data-wow-delay="600ms">
    		<div class='col-md-5 ' >
            
            		<img src="images/android.png"  /> 
                    
            </div>
             	
			
			</div>
            </div>
</div>
</section>
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
    

    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>