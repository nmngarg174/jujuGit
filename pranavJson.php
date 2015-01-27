<?php
//$email=$_POST['email'];
//$password=$_POST['password'];
$food='{
	
	"Category":[
			"burger","sandwich","drinks"],
    "burger": {
        	"maha-burger":"4dgdg" ,
			"chicken-burger":"5"
    },
    "sandwich": {
        	"mug-s":"2",
	 		"big-s":"4"
    },
    "drinks": {
        	"coke":"2",
	  		"fanta":"3" 
    }
}';

// above is the required format here

$obj=json_decode($food);
$category=$obj->Category;
$length=sizeof($category); 
for($i=0;$i<$length;$i++){
	$s=$obj->$category[$i];
	foreach ($s as $key => $value) {
		echo $key;
		echo $value;
	}
}
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