<?php
// ...existing code...
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/calculator/index.php">Miniräknare</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Växla navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item">
          <a class="nav-link" href="/calculator/index.php">Hem</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php if($page=='features') echo ' active'; ?>" href="/calculator/?page=features">Funktioner</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php if($page=='profile') echo ' active'; ?>" href="/calculator/?page=profile">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php if($page=='jokes') echo ' active'; ?>" href="/calculator/?page=jokes">Skämt</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php if($page=='names') echo ' active'; ?>" href="/calculator/?page=names">Namn</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php if($page=='test') echo ' active'; ?>" href="/calculator/?page=test">Test</a>
        </li>
        <li class="nav-item">
          <a class="nav-link<?php if($page=='music') echo ' active'; ?>" href="/calculator/?page=music">Musik</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php
// ...existing code...
?>
