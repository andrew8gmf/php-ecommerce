<?php
include $_SERVER['DOCUMENT_ROOT']."/src/Controller/auth.php";
?>

<h2>Olá, <?php echo $_SESSION['user'];?></h2>
<h2><a href="../src/Controller/logout.php">Sair</a></h2>