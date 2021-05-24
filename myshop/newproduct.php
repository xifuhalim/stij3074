<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/newproduct.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="validator.js"></script>

     
   </head>
<body>
  <div class="container">
    <div class="title">Add Item</div>
    <div class="content">
    <form onsubmit="return validateForm()"  method="post" action="php/dbconnect.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Product Name</span>
            <!input type="text" placeholder="Enter your product name" required>
            <input type="text" class="form-control" name="prname" id="pr_name" placeholder="Enter your product name" required>
                </div>
          <div class="input-box">
            <span class="details">Product Type</span>
            <!input type="varchar" placeholder="Enter your product type" required>
            <input type="text" class="form-control" name="prtype" id="pr_type" placeholder="Enter your product type" required>
            </div>
          <div class="input-box">
            <span class="details">Product Price</span>
            <!input type="double" placeholder="Enter your product price" required>
            <input type="text" class="form-control" name="prprice" id="pr_price" placeholder="Enter your product price" required>
          </div>
          <div class="input-box">
            <span class="details">Product Quantity</span>
            <!input type="int" placeholder="Enter your product quantity" required>
            <input type="text" class="form-control" name="prqty" id="pr_qty" placeholder="Enter your product quantity" required>
          </div>
          <div class="input-box">
            <span class="details">Product Image</span>
            <!input type="int" placeholder="Enter your product quantity" required>
            <input type="file" class="form-control" name="primage" id="pr_image" placeholder="Upload your product image" required>
            </div>
        <div class="button">
        
          <input type="submit" value="Add Item">
         
          
        </div>
      </form>
    </div>
  </div>

</body>
</html>
