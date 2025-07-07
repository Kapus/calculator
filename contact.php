<h1 class="display-4 mb-3">Kontakt</h1>
<p class="lead">Kontakta oss via formuläret nedan.</p>
<hr>
<form method="post" class="row g-3 justify-content-center">
    <div class="col-md-8">
        <input type="text" name="name" class="form-control mb-2" placeholder="Ditt namn" required>
        <input type="email" name="email" class="form-control mb-2" placeholder="Din e-post" required>
        <textarea name="message" class="form-control mb-2" rows="4" placeholder="Ditt meddelande" required></textarea>
        <button type="submit" class="btn btn-primary">Skicka meddelande</button>
    </div>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<div class="alert alert-success mt-3">Tack för att du kontaktade oss, ' . htmlspecialchars($_POST['name']) . '!</div>';
}
?>
