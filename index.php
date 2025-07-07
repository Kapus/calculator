<?php
$allowed_pages = ['home', 'features', 'about', 'contact'];
$page = isset($_GET['page']) && in_array($_GET['page'], $allowed_pages) ? $_GET['page'] : 'home';
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
                        $file = __DIR__ . DIRECTORY_SEPARATOR . $page . '.php';
                        if (file_exists($file)) {
                            include $file;
                        } else {
                            echo '<h1 class="display-4 mb-3">Sidan hittades inte</h1>';
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
