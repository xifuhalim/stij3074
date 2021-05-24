<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "myshopdb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$prname = mysqli_real_escape_string($link, $_REQUEST['prname']);
$prtype = mysqli_real_escape_string($link, $_REQUEST['prtype']);
$prprice = mysqli_real_escape_string($link, $_REQUEST['prprice']);
$prqty = mysqli_real_escape_string($link, $_REQUEST['prqty']);
$primage = mysqli_real_escape_string($link, $_REQUEST['primage']);
 
// Attempt insert query execution
$sql = "INSERT INTO tbl_products (prname, prtype, prprice, prqty, primage) VALUES ('$prname', '$prtype', '$prprice', '$prqty','$primage')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
  

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

?>
<!DOCTYPE html>
<html>
<body>

<button onclick="myFunction()">Go To Main Page</button>

<script>
function myFunction() {
  location.replace("http://localhost:8012/myshop")
}
</script>

</body>
</html> 