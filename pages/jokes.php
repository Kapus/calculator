<?php
// jokes.php - Visar tre skämt från Official Joke API
$jokes = [];
$error = '';

for ($i = 0; $i < 3; $i++) {
    $url = 'https://official-joke-api.appspot.com/jokes/random';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    $response = curl_exec($ch);
    if ($response !== false) {
        $data = json_decode($response, true);
        if (isset($data['type']) && isset($data['setup']) && isset($data['punchline'])) {
            $jokes[] = $data['setup'] . '<br><strong>' . $data['punchline'] . '</strong>';
        } else {
            $jokes[] = 'Kunde inte hämta skämt.';
        }
    } else {
        $jokes[] = 'Kunde inte hämta skämt.';
    }
    curl_close($ch);
}
?>
<div class="container mt-5 mb-5" style="max-width:900px;">
    <h2>Slumpmässiga skämt</h2>
    <?php foreach ($jokes as $joke): ?>
        <div class="alert alert-success mb-3"><?php echo $joke; ?></div>
    <?php endforeach; ?>
    <form method="get">
        <input type="hidden" name="page" value="jokes">
        <button type="submit" class="btn btn-primary">Hämta nya skämt</button>
    </form>
</div>
