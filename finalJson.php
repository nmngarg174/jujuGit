<?php 
	
	// the format i want the data is here
	// enter the category no. here and accordingly get the values for the qty and then final price for the bill here
	// create the foriegn key here and then select the values here
	
	
	$food='{
			
			"name":["naman garg"],
			"email":["nmngarg174@gmail.com"],
			"category":["burger","pizza","drinks"],
				
				"burger":{
				"maha-burger":"2","chicken-burger":"4" 	
				},
				
				"pizza":{
					"chicken":"2","onion":"5"	
				},
				
				"drinks":{
					"fanta":"5","coke":"7"
				}
		
		
		
	}'; 
	
	// understand the json concept throughly here
	// parse the above string here then store in the database here and then display it to the vendor here
	
	$obj=json_decode($food); 
	
	var_dump($obj) ;
	
	$name=$obj->name; 
	$email=$obj->email; 
	$category=$obj->category; 
	
	$length=count($category);
	
	for($i=0;$i<$length;$i++){
			// display all the values here
			echo $category[$i]; 
			$items=$obj->$category[$i]; 
			foreach($items as $key=>$value){
				echo $key; 
				echo $value; 
				echo '<br>'; 
			}
	}
	
	// after getting these values store them in a db and then show then there 
	
	
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