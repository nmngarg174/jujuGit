<?php 
	
	
	// first compose the object in the json format then send it on to the other page then 
	// retrieve the values from the other php page here 
	
	// storing all the values inside the array here and then forwarding the request here 
	
	$obj=array( "naman garg"
				,"nmngarg174@gmail.com"
	
					,array(
						"order",
						array("burger",
						
							array("maha-burger","2"), 
							array("chicken-burger","3")
						),
						array("caffe",
						
							array("caffe-latte","4"),
							array("orange-latte","5")
							),
						array("drinks",
						
							array("coke","3"),
							array("fanta","4")
							
							)
						)
		);
		
		// create an object of this partivular array here 
		
		json_encode($obj); 
		 
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>