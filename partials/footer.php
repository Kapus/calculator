<?php
// ...existing code...
?>
<footer class="site-footer bg-dark text-white py-3">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
        <div>
            <a href="?page=about" class="text-white text-decoration-underline me-3">Om oss</a>
            <a href="?page=contact" class="text-white text-decoration-underline">Kontakt</a>
        </div>
        <div class="text-center flex-grow-1">
            &copy; <?php echo date('Y'); ?> Miniräknare. Alla rättigheter förbehållna.
        </div>
        <div class="text-end" style="min-width:90px;">
            <span id="clock" style="font-size:1.1rem;font-weight:bold;color:#fff;"></span>
        </div>
    </div>
</footer>
