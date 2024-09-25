<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>COMPLAIN PAGE</title>
    <link rel="stylesheet" href="FarmingTips.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;600&display=swap" rel="stylesheet">
  </head>

  <body>

    <form action="" method="POST">
      <div class="title">
        <h2>FARMER TIPS PAGE</h2>
      </div>

      <div class="half">
        <div class="item">
          <label for="id">Farmer Id</label>
          <input type="text" placeholder="farmer_id" required="" id="id" name="farmer_id">
        </div>
      </div>

      <div class="full">
        <label for="message">Tips</label>
        <textarea id="tips_name" name="tips_name" required></textarea>
      </div>

      <div class="action">
        <input type="submit" value="Submit" name="save">
        <input type="reset" value="Cancel" name="reset">
      </div>

      <input type="button" value="Go back!" onclick="history.back()">
    </form>

    <?php
    // Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "web_service";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check the connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Check if form is submitted
    if (isset($_POST['save'])) {
      // Escape special characters in form inputs to prevent SQL injection
      $farmer_id = mysqli_real_escape_string($conn, $_POST['farmer_id']);
      $tips_name = mysqli_real_escape_string($conn, $_POST['tips_name']);

      // Insert data into database
      $sql_query = "INSERT INTO farmingtips (farmer_id, tips_name) VALUES ('$farmer_id', '$tips_name')";

      if (mysqli_query($conn, $sql_query)) {
        echo "New Details entry Inserted Successfully!!";
      } else {
        echo "Error: " . $sql_query . "<br>" . mysqli_error($conn);
      }

      // Close the connection
      mysqli_close($conn);
    }
    ?>
  </body>
</html>
