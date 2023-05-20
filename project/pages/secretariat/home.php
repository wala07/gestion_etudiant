<?php
include("../first.php");
include("navbar.php");
//include("../../services/auth/auth.php");
//loginact("../home.php");

?>
<center><p class="text-6xl mt-10">Bienvenue 
    <?php 
    session_start();$r=$_SESSION["name"];echo "<b>$r</b>";session_write_close();
    ?>
</p></center>