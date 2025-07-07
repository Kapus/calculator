<?php
// names.php - Genererar slumpmässiga fantasy-namn lokalt utan API
function generate_fantasy_name() {
    $prefixes = ['Ara', 'Bel', 'Cal', 'Dra', 'Ela', 'Fae', 'Gal', 'Hel', 'Ira', 'Jor', 'Kel', 'Lia', 'Mor', 'Nor', 'Ori', 'Pha', 'Qua', 'Ryn', 'Syl', 'Tor', 'Uri', 'Val', 'Wyn', 'Xan', 'Yel', 'Zor',
        'Ael', 'Bryn', 'Cyn', 'Dae', 'Eir', 'Fyn', 'Gwyn', 'Hyl', 'Isil', 'Jyn', 'Kael', 'Lyr', 'Myth', 'Nyx', 'Oryn', 'Pyra', 'Qira', 'Rael', 'Sael', 'Tir', 'Ulyn', 'Vael', 'Wynne', 'Xyr', 'Yrin', 'Zyn'];
    $middles = ['dor', 'len', 'mir', 'nor', 'ril', 'sar', 'thel', 'vyn', 'wyn', 'zor', 'lith', 'dil', 'rian', 'thas', 'dros', 'lian', 'riel', 'thil', 'vash', 'wyn', 'dros',
        'dril', 'thir', 'vyr', 'lith', 'syl', 'nyr', 'myr', 'thyr', 'lyr', 'sryn', 'nyth', 'myth', 'thil', 'vash', 'lyth', 'syth', 'nyth', 'myth', 'thil', 'vash'];
    $suffixes = ['ion', 'iel', 'ar', 'or', 'us', 'a', 'is', 'on', 'en', 'el', 'yn', 'as', 'os', 'ir', 'an', 'eth', 'il', 'or', 'is', 'as',
        'ith', 'oth', 'yr', 'or', 'is', 'as', 'us', 'os', 'an', 'en', 'in', 'un', 'on', 'el', 'al', 'il', 'ol', 'ul', 'yr', 'er'];
    return $prefixes[array_rand($prefixes)] . $middles[array_rand($middles)] . $suffixes[array_rand($suffixes)];
}
$names = [];
for ($i = 0; $i < 12; $i++) {
    $names[] = generate_fantasy_name();
}
?>
<div class="container mt-5 mb-5" style="max-width:900px;">
    <h2 class="mb-5">Slumpmässiga fantasy-namn</h2>
    <div class="row">
        <?php foreach ($names as $name): ?>
            <div class="col-md-3">
                <div class="alert alert-success mb-3 text-center" style="font-size:1.2rem;">
                    <?php echo htmlspecialchars($name); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <form method="get">
        <input type="hidden" name="page" value="names">
        <button type="submit" class="btn btn-primary">Hämta nya namn</button>
    </form>
</div>
