<?php
// Weather API settings
$weather = null;
$error = '';
$city = 'Klippan,SE'; // Changed the default city to Klippan, Sweden
$apiKey = '9685da3bce0b13091788171e3dababb1'; // Your OpenWeatherMap API key
$url = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric&lang=sv";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
$response = curl_exec($ch);
if ($response !== false) {
    $weather = json_decode($response, true);
} else {
    $error = 'Kunde inte hämta väderdata.';
}
curl_close($ch);
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
<h1 class="display-4 mb-3">Hej, världen!</h1>
<p class="lead">Detta är ett enkelt PHP Hello World med Bootstrap.</p>
<hr>
<h2 class="mb-3">Aktuellt väder i <?php echo htmlspecialchars($city); ?></h2>
<?php if ($weather): ?>
    <div class="alert alert-info">
        <strong><?php echo $weather['weather'][0]['main']; ?></strong> -
        <?php echo $weather['weather'][0]['description']; ?><br>
        Temperatur: <?php echo $weather['main']['temp']; ?>&deg;C<br>
        Luftfuktighet: <?php echo $weather['main']['humidity']; ?>%<br>
        Vind: <?php echo $weather['wind']['speed']; ?> m/s
    </div>
<?php elseif ($error): ?>
    <div class="alert alert-warning"><?php echo $error; ?></div>
<?php endif; ?>
