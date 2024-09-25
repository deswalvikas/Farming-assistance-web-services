<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SellProduct.css"/>
    <title>Sell Product form</title>
</head>
<body>
    <form action="SellProduct.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <h1 class="form-title">Sell Product</h1>
        <form action="SellProduct.php" method="POST">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="Sell id">Sell ID</label>
                    <input type="text"
                            id="sell_id"
                            name="sell_id"
                            placeholder="sell_id"/>
                </div>
                <div class="user-input-box">
                    <label for="Farmer id">Farmer ID</label>
                    <input type="number"
                            id="farmer_id"
                            name="farmer_id"
                            placeholder="farmer_id"/>
            </div>
            <div class="user-input-box">
                <label for="supplier id">Supplier ID</label>
                <input type="number"
                        id="supplier_id"
                        name="supplier_id"
                        placeholder="supplier_id"/>
            </div>
            <div class="user-input-box">
                <label for="supplier name">Supplier Name</label>
                <input type="text"
                        id="supplier_name"
                        name="supplier_name"
                        placeholder="Enter Name"/>
            </div>
            <div class="user-input-box">
                <label for="password">Crop Name</label>
                <input type="text"
                        id="crop_name"
                        name="crop_name"
                        placeholder="Enter name"/>
            </div>
          
            <div class="user-input-box">
                <label for="quantity">Quantity</label>
                <input type="text"
                        id="number"
                        name="quantity_id"
                        placeholder="In kgs"/>
            </div>
            <div class="user-input-box">
                <label for="rupees">Rupees</label>
                <input type="text"
                        id="rupees"
                        name="rupees_id"
                        placeholder="amount"/>
            </div>
            <div class="form-submit-btn">
                <input type="submit" value="submit" name="Sell">
<input type="button" value="Go back!" onclick="history.back()">
            </div>

        </form>
    <?php
    
    $servername="localhost";
    $username="root";
    $password="";
    $database="web_service";

    $conn = mysqli_connect($servername,$username,$password,$database);

    // now check the connection
    if(!$conn)
    {
      die("connection failed :" . mysqli_connect_error());
    };


        
      if(isset($_POST['Sell']))
    {
     
      $sell_id = $_POST['sell_id'];
      $farmer_id = $_POST['farmer_id'];
      $supplier_id = $_POST['supplier_id'];
      $supplier_name = $_POST['supplier_name'];
      $crop_name = $_POST['crop_name'];
      $quantity_id = $_POST['quantity_id'];
      $rupees_id = $_POST['rupees_id'];

      $sql_query = "INSERT INTO sell_crop(sell_id,farmer_id,supplier_id,supplier_name,
      crop_name,quantity_id,rupees_id) VALUES('$sell_id','$farmer_id','$supplier_id',
      '$supplier_name','$crop_name','$quantity_id','$rupees_id')";

      if(mysqli_query($conn , $sql_query))
      {
        echo "New Details entry Inserted Successfully!!";
      }
      else
      {
        echo "Error: " , $sql_query . "" . mysqli_error($conn);
      }
      mysqli_close($conn);

    }
    ?>
    </div>
</body>
</html>