<?php
// Weather API settings
$weather = null;
$error = '';
$city = 'London'; // You can change the default city
$apiKey = '9685da3bce0b13091788171e3dababb1'; // Your OpenWeatherMap API key
$url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";
$response = @file_get_contents($url);
if ($response !== false) {
    $weather = json_decode($response, true);
} else {
    $error = 'Unable to fetch weather data.';
}
?>
<style>
body {
    background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1500&q=80');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
}
</style>
<h1 class="display-4 mb-3">Hello, World!</h1>
<p class="lead">This is a simple PHP Hello World using Bootstrap.</p>
<hr>
<h2 class="mb-3">Current Weather in <?php echo htmlspecialchars($city); ?></h2>
<?php if ($weather): ?>
    <div class="alert alert-info">
        <strong><?php echo $weather['weather'][0]['main']; ?></strong> -
        <?php echo $weather['weather'][0]['description']; ?><br>
        Temperature: <?php echo $weather['main']['temp']; ?>&deg;C<br>
        Humidity: <?php echo $weather['main']['humidity']; ?>%<br>
        Wind: <?php echo $weather['wind']['speed']; ?> m/s
    </div>
<?php elseif ($error): ?>
    <div class="alert alert-warning"><?php echo $error; ?></div>
<?php endif; ?>
