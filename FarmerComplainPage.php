<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>COMPLAIN PAGE</title>
    <link rel="stylesheet" href="FarmerComplainPage.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;600&display=swap" rel="stylesheet">
  </head>

  
  <body>

    <form action="FarmerComplainPage.php" method="POST">
      <div class="title">
        <h2>FARMER COMPLAIN PAGE</h2>
      </div>
       <div class="half">
        
        <div class="item">
          <label for="id">Complaint Id</label>
          <input type="id" placeholder="complain_id" required="" id = "id" name="complain_id">
        </div>
        <div class="item">
          <label for="id">Farmer Id </label>
          <input type="id" placeholder="farmer_id" required=""  id = "id" name="farmer_id">
        </div>
      </div>
      <div class="full">
        <label for="message">Complaint</label>
        <textarea id="complain" name="complaint"></textarea>
      </div>
      <div class="action">
        <input type="submit" value = "submit" name="save">
        <input type="reset" value = "Cancel" name="reset">
      </div>


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


        
      if(isset($_POST['save']))
    {
     
      $complain_id = $_POST['complain_id'];
      $farmer_id = $_POST['farmer_id'];
      $complaint = $_POST['complaint'];


      $sql_query = "INSERT INTO farmer_complain_page (complain_id,farmer_id,complaint) VALUES('$complain_id','$farmer_id','$complaint')";

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
    <input type="button" value="Go back!" onclick="history.back()">
</form>

  </body>

  
</html>