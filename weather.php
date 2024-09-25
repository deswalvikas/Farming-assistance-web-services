<?php
$backgroundImageUrl = 'https://images.hindustantimes.com/rf/image_size_630x354/HT/p2/2020/08/02/Pictures/bathinda-weather-agriculture_7b1053c2-d4ca-11ea-bae0-701c4bed6ede.jpg';
if (isset($_POST['city'])) {
    $city = $_POST['city'];
    $apiKey = '0af88438f7e9e8fe7b710e2699fc4caa'; // Replace with your OpenWeatherMap API key

    // Call the OpenWeatherMap API
    $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&appid=" . $apiKey . "&units=metric";
    $weatherData = file_get_contents($apiUrl);
    $weatherArray = json_decode($weatherData, true);

    // Extract necessary data
    $temperature = $weatherArray['main']['temp'];
    $description = $weatherArray['weather'][0]['description'];

    // Store city data in MySQL
    $conn = new mysqli('localhost', 'root', '', 'web_service');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO weather_logs (city, temperature, description) VALUES ('$city', '$temperature', '$description')";
    if ($conn->query($sql) === TRUE) {
        echo "Weather data saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    // Display the weather data
    echo "<h2>Weather in " . $city . ":</h2>";
    echo "<p>Temperature: " . $temperature . "°C</p>";
    echo "<p>Condition: " . $description . "</p>";
}
?>
