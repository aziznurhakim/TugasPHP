<?php session_start();
echo "Nama Anda Adalah ". $_SESSION['nama'];
echo "<a href='session02.php'>Menuju ke halaman pertama</a>";
?>