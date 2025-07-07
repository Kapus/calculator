<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="?page=home">Miniräknare</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Växla navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item">
          <span id="clock" class="me-3" style="font-size:1.1rem;font-weight:bold;color:#0d1a4a;"></span>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php if($page=='home') echo ' active'; ?>" aria-current="page" href="?page=home">Hem</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php if($page=='features') echo ' active'; ?>" href="?page=features">Funktioner</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php if($page=='contact') echo ' active'; ?>" href="?page=contact">Kontakt</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
