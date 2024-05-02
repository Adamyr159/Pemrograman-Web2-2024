<?php 
require_once 'navbar.html';
require_once 'sidebar.html';
?>

<h2>Selamat Datang <?= $_SESSION['user']['username']; ?></h2>

<?php
require_once 'footer.html';
?>