
<?php 
	
	if(isset($_GET['action']) && $_GET['action']=="add"){
		
		$id=intval($_GET['id']); 
		
		if(isset($_SESSION['cart'][$id])){
			
			
			$_SESSION['cart'][$id]['quantity']++;
			
			  	
		}else{
			
			
		// add the new product into the cart here
			
			$sql_s=("select * from products1 where id=($id)"); 
	//$query_s=mysql_query($sql_s);
			$query_s=$mysqli->query($sql_s);   
				if($query_s->num_rows>0){
		
					$row_s=$query_s->fetch_array(); 
		
					$_SESSION['cart'][$row_s['id']]=array(
		
					"quantity"=>1,
					"price"=>$row_s['price'] 
		
		
	); 
			
	}else{
		$message="This product id is invalid"; 	
			}  
		
		}
			
		
	}
		
	
?>




            
            <?php
				
				if(isset($message)){
				
				echo "<h2>$message</h2>"; 	
				}
				
			//	echo print_r($_SESSION['cart']); 
			?>
            
             <table>
            	
                 <?php 
	
	
	
	
	$sql=("select * from products1 order by category"); 
	//echo 'connected!!';
	 
	$res=$mysqli->query($sql);
	// echo 'connected!!';
	  
	  $count=$res->num_rows;
	  
		  $category='Burger';
		  
	  for($i=0;$i<$count;$i++){
		  
			
			//print " <h1> ".$category." </h1> "; 
		   // echo "<td><h1>".$category."</h1><br></td>";
			//echo "<br>";
			?>
             
             	<!--<div class='inner-content'>
                 	<td ><h3><?php //echo ucwords($category) ?></h3></td>
             
             </div>-->
             </tr>
             <div class="row">
             <div id='<?php echo strtolower($category)?>'>
             </div>
             <h2 style="position:relative;left:15px;"><?php echo ucwords($category)?></h2>
             

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
                        <div class="thumbnail" style="height:260px; width:200px;   ">
                            <?php echo '<img class="img-rounded" style="height:100px; width:100px;" src="data:image/jpeg;base64,'.base64_encode( $row['images'] ).'"/>' ?>
                            <div class="caption">
                                <h4 class="pull-right">Rs 50</h4>
                                <h4><a href="#"><small><?php echo $row[1] ?></small></a>
                                </h4>
                                <p><a href="shopping.php?page=products&log=in&action=add&id=<?php echo $row[0]; ?>"><h5>Add To cart</h5></a></p>
                            </div>
                            <!--<div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>-->
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
        <?php
	  }
	?>        
            </table>
               
