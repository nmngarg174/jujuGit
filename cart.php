<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="jquery-1.11.1.js" ></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>


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

#container{
	width:700px; 
	margin::150px auto; 
	backgroung-color:#eee; 
	padding:15px; 	
	overflow:hidden; 
}

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

.top{
	height:190px;
	/*background-image:url(images/foodm.jpg);*/ 	
	color:black; 
	background-size:cover;  
}

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

</head>


<body>

		<nav class='navbar navbar-inverse '>
            	<div class='container-fluid'>
                	<div class='navbar-header'>
                    <a class='navbar-brand' href='juju.com'></a>
                    
                    
                    </div>
                    	<div>
                        	<ul class='nav navbar-nav'>
                            	<li class='active'><a href='home.php?log=in'>JUJU</a></li>
                                <li><a href='shopping.php?log=in&page=products'>Take An Order</a></li>
                                <li><a href=''>Online Orders</a></li>
                                <li><a href='fulfilled.php?log=in'>Orders Delivered</a></li>
                                <li><a href=''>Balance Sheet</a></li>
                                <li><a href=''>Add An Employee</a></li>
                                <li><a href=''>View The Map</a></li>
                                <li><a href=''>Feedback</a></li>
                                <li><a href=''>To-Do-List</a></li>
                                <li><a href=''>Add Items To Menu</a></li>
                                <li><a href=''>Developers</a></li>
                                
                                                                
                            </ul>
                            
                           <ul class='nav navbar-nav navbar-right'>
                            <li><a href='home.php?log=logout'><span class='glyphicon glyphicon-log-out'></span></a>LogOut</li>
                                
                            </ul>
                            </div>
                </div>
            </nav>  
            
                 
                 
                 <br />
                 
            </div>
        
        
        		<div class='navbar navbar-default navbar-fixed-bottom'>
                	
                    <div class='container-fliud'>
                    	<!--<p class='navbar-text'>Site built by Naman Garg</p>-->
                        <a class='navbar-btn btn-danger btn pull-right' style="position:relative; left:-5px;">Developer's Page</a>
                    </div>
                </div>
<!--
        <div class='top' style="width:100%; margin-top:-30px;"   >
				
                <div class="jumbotron" >
                	 
                     <div class='put'>
                     
                     
                     <a href='../../../Users/princEvil/Desktop/project/www.juju.in'><img src="images/juju.jpg"  /></a>
                     
                     <h1><simple>Discover the great taste around Thapar .. </simple></h1> 
                     
                     
                     	</div>
                     
 
                </div>     
                    
                     <!--
                </div>
-->					
                 
                 
                 
            
        	

</body> 


<?php
	
	// creation of the php cart here and then executing it here
	
	// check for the submit button here 
	//session_start(); 
	error_reporting(0); 
	session_start(); 	
	$mysqli=new mysqli('localhost','root','','a9748231_user');
	
	if(isset($_POST['submit'])){
			
			//echo $_POST['quantity'];
			foreach($_POST['quantity'] as $key => $value){
				
				
				if($value==0){
					unset($_SESSION['cart'][$key]); 	
				}else{
					
					$_SESSION['cart'][$key]['quantity']=$value; 
				}
					
			}
			
	}else{
		//session_start(); 	
	}
	 
	
?> 



<body>

<h2>Cart Page</h2>

<form  action='cart.php' method='post'> 
	
    <table class='table'> 
    	
        <tr> 
        	<th>Sno.</th>
        	<th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Item Price</th>
        </tr>
        <?php
			
			$sql_c="select * from products1 where id in ("; 
					
					foreach($_SESSION['cart'] as $id=>$value){
						$sql_c.=$id.",";
					}
					
					// subtract the comma from the end here
					$sql_c=substr($sql_c,0,-1).") order by id asc"; 
					
					//echo $sql_c; 
					
					// print all the items in the cart here 
					
					$result=$mysqli->query($sql_c);
					$totalPrice=0;  
					if($result->num_rows>0){
						
						while($row=$result->fetch_array()){
							$subTotal=$_SESSION['cart'][$row['id']]['quantity']*$row['price']; 
							$totalPrice+=$subTotal; 
		?>
        
        <tr> 	
        	<td><?php echo $row[0]?> </td>
            <td> <?php echo $row[1] ?></td>
            <td><input type="text" name="quantity[<?php echo $row[0] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id']]['quantity'] ?>" />  </td>
            <td> <?php echo $row[2] ?></td>
            
            <td> <?php  echo $_SESSION['cart'][$row['id']]['quantity']*$row['price']  ?>Rs</td>
        </tr>
        
        
    <?php
						}
					}
					// now print the total price of the items here and then show the value here
	?>
    	<tr> 	
        	<td>Total Price : <?php echo $totalPrice ; $_SESSION['totalPrice']=$totalPrice; ?> </td>
            </tr>
    </table>
<br />
<hr />
<!--<input type='submit' value='Update the Cart' name='submit' />-->


<button type='submit' name='submit' class='btn btn-default'>Update The Cart</button>
<a href='print.php' class="btn btn-default" >
            
            Print Invoice
            </a>
</form>
<!--
<form action='print.php' method="post" style="float:left">  
	<button type='submit' name='print' value='Print the Bill' class='btn btn-default'>Print Invoice</button>
 
</form>
-->
<br /> 

</body>
</html>


