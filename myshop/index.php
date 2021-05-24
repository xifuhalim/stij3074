<?php 
include_once('php/connection.php'); 
$query="select * from tbl_products"; 
$result=mysqli_query($aVar, $query); 
?> 
<!DOCTYPE html>
<html>
   <head>
      <title>Jan The Beauty Shop</title>
	  
      <link rel="stylesheet" href="css/index.css" type="text/css">
	  
   </head>
   <body>
   
   
      <div id="header">
         <div id="logo">
            <h3><span>Jan The</span> Beauty Shop</h3>
         </div>
      </div>
	  <div id="container">
   <div id="content-container">
      <h1>Jan The Beauty Shop</h1>
      <p>Kecapi kecantikan wajah bak bidadari syurga dengan keserian yang dicemburui oleh para wanta termasuk Miss Universe Antarabangsa
         bersama dengan Jan The Beauty Shop.</p>
   </div>
   <div id="bg-container">
   <img src="images/logo.png">
   </div>
</div>	  

<table align-self="centre" border="1px" style="max-width: 1300px; width:100%; line-height:30px; padding: 25px 30px;background: linear-gradient(135deg, #FF1493, #71b7e6);;box-shadow: 0 5px 10px rgba(0,0,0,0.15);"> 
	<tr> 
		<th colspan="7"><h2 style="color:#fff">Product Record</h2></th> 
		</tr> 
			  <th style="color:#fff"> Product ID </th> 
			  <th style="color:#fff"> Product Name </th> 
			  <th style="color:#fff"> Product Type </th> 
			  <th style="color:#fff"> Product Price </th> 
			  <th style="color:#fff"> Product Quantity </th> 
			  <th style="color:#fff"> Product Date </th> 
			  <th style="color:#fff"> Product Image </th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td style="color:#fff"><?php echo $rows['prid']; ?></td> 
		<td style="color:#fff"><?php echo $rows['prname']; ?></td> 
		<td style="color:#fff"><?php echo $rows['prtype']; ?></td> 
		<td style="color:#fff"><?php echo $rows['prprice']; ?></td> 
		<td style="color:#fff"><?php echo $rows['prqty']; ?></td> 
		<td style="color:#fff"><?php echo $rows['datecreated']; ?></td> 
		<td style="color:#fff"><?php echo "localhost:8012/myshop/images/"; echo $rows['primage']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
<div class="fab-container">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<div class="fab fab-icon-holder">
			<i class="fa fa-plus"></i>
		</div>

		<ul class="fab-options">
			<li>
				<span class="fab-label">Add New Item </span>
				<div class="fab-icon-holder">
					<i onclick="window.location.href='newproduct.php';" class="fa fa-tag"></i>
				</div>
   </body>
</html>



