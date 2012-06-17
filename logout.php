<?php session_start();
session_destroy();
session_start();
?>
<p></p>
<p>Sessione pulita.</p>
<p></p>
<p>Verifica:</p>
<p>Username: <?php echo $_SESSION['username']; ?></p>
<p>Admin: <?php echo $_SESSION['admin']; ?></p>
<p></p>
<p><a href="index.php">Home</a></p>