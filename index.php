<?php
$allowed_pages = ['home', 'features', 'about', 'contact'];
$page = isset($_GET['page']) && in_array($_GET['page'], $allowed_pages) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World with Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1500&q=80');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
    }
    </style>
</head>
<body class="bg-light">
    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="?page=home">Calculator</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link<?php if($page=='home') echo ' active'; ?>" aria-current="page" href="?page=home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?php if($page=='features') echo ' active'; ?>" href="?page=features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?php if($page=='about') echo ' active'; ?>" href="?page=about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?php if($page=='contact') echo ' active'; ?>" href="?page=contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <?php
                        $file = __DIR__ . DIRECTORY_SEPARATOR . $page . '.php';
                        if (file_exists($file)) {
                            include $file;
                        } else {
                            echo '<h1 class="display-4 mb-3">Page not found</h1>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
