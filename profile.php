<?php
// profile.php - Användarprofil (exempel)
// Inkludera databasanslutning
require_once 'includes/db.php';

// Hämta första användaren från databasen (exempel)
$stmt = $pdo->query('SELECT namn, epost, registrerad FROM users LIMIT 1');
$anvandare = $stmt->fetch();

if (!$anvandare) {
    $anvandare = [
        'namn' => 'Ingen användare hittades',
        'epost' => '-',
        'registrerad' => '-'
    ];
}
?>

<div class="container mt-5">
    <h2>Min profil</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Namn:</strong> <?php echo htmlspecialchars($anvandare['namn']); ?></li>
        <li class="list-group-item"><strong>E-post:</strong> <?php echo htmlspecialchars($anvandare['epost']); ?></li>
        <li class="list-group-item"><strong>Registrerad:</strong> <?php echo htmlspecialchars($anvandare['registrerad']); ?></li>
    </ul>
</div>
