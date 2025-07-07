<h1 class="display-4 mb-3">Contact</h1>
<p class="lead">Get in touch with us using the form below.</p>
<hr>
<form method="post" class="row g-3 justify-content-center">
    <div class="col-md-8">
        <input type="text" name="name" class="form-control mb-2" placeholder="Your Name" required>
        <input type="email" name="email" class="form-control mb-2" placeholder="Your Email" required>
        <textarea name="message" class="form-control mb-2" rows="4" placeholder="Your Message" required></textarea>
        <button type="submit" class="btn btn-primary">Send Message</button>
    </div>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<div class="alert alert-success mt-3">Thank you for contacting us, ' . htmlspecialchars($_POST['name']) . '!</div>';
}
?>
