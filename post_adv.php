<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="POST_ADV.css"/>
    <title>POST ADVERTISEMENT</title>
</head>
<body>
    <div class="container">
        <h1 class="form-title">POST ADVERTISEMENT</h1>
        <form action="post_adv.php" method="POST">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="Sell id">POST ID</label>
                    <input type="text"
                            id="post_id"
                            name="post_id"
                            placeholder="Enter ID"/>
                </div>
                <div class="user-input-box">
                    <label for="Farmer id">SUPPLIER ID</label>
                    <input type="text"
                            id="supplier_id"
                            name="supplier_id"
                            placeholder="Enter ID"/>
            </div>
            <div class="user-input-box">
                <label for="supplier id">CROP NAME</label>
                <input type="text"
                        id="crop_name"
                        name="crop_name"
                        placeholder="Enter name"/>
            </div>
                
                
            <div class="user-input-box">
                <label for="password">REQUIRED QUANTITY</label>
                <input type="text"
                        id="required_quantity"
                        name="required_quantity"
                        placeholder="Enter quantity"/>
            </div>
            <div class="user-input-box">
                <label for="password">SUPPLIER NAME</label>
                <input type="text"
                        id="supplier_name"
                        name="supplier_name"
                        placeholder="Enter name"/>
            </div>
            <div class="user-input-box">
                <label >CONTACT NUMBER</label>
                <input type="number"
                        id="number"
                        name="contact_number"
                        placeholder="Enter Contact Number"/>
            </div>
            <div class="form-submit-btn">
                <input type="submit" value="submit" name="POST">
            </div>

            </form>

 <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="web_service";
    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn)
    {
      die("connection failed :" . mysqli_connect_error());
    };

   
    include("connection.php");
      if(isset($_POST['POST']))
    {
     
      $post_id= $_POST['post_id'];
      $supplier_id = $_POST['supplier_id'];
      $crop_name = $_POST['crop_name'];
      // $crop_image= $_POST['crop_image'];
      $required_quantity = $_POST['required_quantity'];
      $supplier_name= $_POST['supplier_name'];
      $contact_number= $_POST['contact_number'];




      $sql_query = "INSERT INTO post_adv(post_id,supplier_id,crop_name,required_quantity,supplier_name,contact_number) 
      VALUES('$post_id' , '$supplier_id' , '$crop_name' ,  '$required_quantity' , '$supplier_name' , '$contact_number')";

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
    <input type="button" value="Go back!" onclick="history.back()">
</body>
</html>