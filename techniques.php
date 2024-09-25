<?php
header('Content-Type: application/json'); // Ensure we're returning JSON data
$conn = new mysqli('localhost', 'root', '', 'web_service');

// Check connection
if ($conn->connect_error) {
    die(json_encode(['message' => "Connection failed: " . $conn->connect_error]));
}

$response = [];

// Handle POST request to insert product
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Insert product into the database
    $stmt = $conn->prepare("INSERT INTO techniques (product_name, type, description, price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssd", $product_name, $type, $description, $price);

    if ($stmt->execute()) {
        $response['message'] = "Product added successfully";
    } else {
        $response['message'] = "Error: " . $conn->error;
    }

    $stmt->close();
}

// Fetch all products from the database
$sql = "SELECT * FROM techniques";
$result = $conn->query($sql);

$products = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

$response['products'] = $products;

echo json_encode($response); // Return the response in JSON format

$conn->close();
?>
