<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="AdminLogin.css">
    <title>Admin Login</title>

    <style>h1 {
            font-size: 15px; /* Smaller font size */
            color: #333;
            text-align: center;
            font-family: 'Arial', sans-serif;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            transition: color 0.3s ease; /* Smooth transition for hover */
        }

        h1:hover {
            color: #007bff; /* Change color on hover */
            cursor: pointer; /* Adds a pointer cursor on hover */
        }
        .login-form h1 {
    float: left;
    font-size: 38px;
    border-bottom: 4px solid #4caf50;
    margin-bottom: 50px;
    padding: 13px 0px;
}
</style>
</head>
<body>
    <div class="login-form">
        <h1> Admin Login </h1>
        <div class="txt">
            <form action="adminPage.html" method="POST">
               
                <input type="Id" placeholder="admin_id" required="" name="Admin_id">
        </div>
       
        <div class="txt">
               
                <input type="password" placeholder="admin_password" required="" name="Password">
        </div>
            
            <button class="btn" name="btn"> Login </button>
         
        </form>
    </div>
    <input type="button" value="Go back!" onclick="history.back()">
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="AdminLogin.css">
    <title>Admin Login</title>

    <style>
        /* Body styling to add a background image */
        body {
            background-image: url('https://s3.amazonaws.com/s3-biz4intellia/images/smart-farming-a-comprehensive-iot-solution-for-agriculture-monitoring.jpg'); /* Replace with your image path */
            background-size: cover; /* Ensure the image covers the entire page */
            background-position: center; /* Center the background image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-attachment: fixed; /* Keep the background fixed when scrolling */
            font-family: Arial, sans-serif; /* Optional: Set a font-family */
        }

        h1 {
            font-size: 15px; /* Smaller font size */
            color: #333;
            text-align: center;
            font-family: 'Arial', sans-serif;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            transition: color 0.3s ease; /* Smooth transition for hover */
        }

        h1:hover {
            color: #007bff; /* Change color on hover */
            cursor: pointer; /* Adds a pointer cursor on hover */
        }

        .login-form h1 {
            float: left;
            font-size: 38px;
            border-bottom: 4px solid #4caf50;
            margin-bottom: 50px;
            padding: 13px 0px;
        }

        /* Additional form styling */
        .login-form {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background for form */
            padding: 20px;
            width: 300px;
            margin: 100px auto;
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1); /* Slight shadow */
        }

        .login-form input[type="text"], .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-form button:hover {
            background-color: #45a049; /* Darker green on hover */
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h1> Admin Login </h1>
        <div class="txt">
            <form action="adminPage.html" method="POST">
                <input type="text" placeholder="admin_id" required name="Admin_id"> <!-- Changed input type to text -->
        </div>
        <div class="txt">
                <input type="password" placeholder="admin_password" required name="Password">
        </div>
        <button class="btn" name="btn"> Login </button>
        </form>
    </div>
    <input type="button" value="Go back!" onclick="history.back()">
</body>
</html>
