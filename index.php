<?php
$allowed_pages = ['features', 'about', 'contact', 'profile'];
$page = isset($_GET['page']) && in_array($_GET['page'], $allowed_pages) ? $_GET['page'] : '';

// Weather API settings for home page
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
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniräknare med Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background: #e9f0f7 !important;
        background-image: none !important;
        background-size: unset !important;
        background-position: unset !important;
        background-repeat: unset !important;
        min-height: 100vh;
    }
    html, body {
        height: 100%;
    }
    .site-footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        z-index: 1000;
    }
    .main-content {
        padding-bottom: 80px; /* Space for footer */
    }
    </style>
</head>
<body class="bg-light">
    <!-- Bootstrap Navbar -->
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'navbar.php'; ?>
    <div class="container-fluid py-5 main-content">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <?php
                        if ($page === '') {
                        ?>
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
                        <?php
                        } else {
                            $file = __DIR__ . DIRECTORY_SEPARATOR . $page . '.php';
                            if (file_exists($file)) {
                                include $file;
                            } else {
                                echo '<h1 class="display-4 mb-3">Sidan hittades inte</h1>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'footer.php'; ?>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function updateClock() {
        const now = new Date();
        const h = now.getHours().toString().padStart(2, '0');
        const m = now.getMinutes().toString().padStart(2, '0');
        const s = now.getSeconds().toString().padStart(2, '0');
        document.getElementById('clock').textContent = `${h}:${m}:${s}`;
    }
    setInterval(updateClock, 1000);
    updateClock();
    </script>
</body>
</html>
