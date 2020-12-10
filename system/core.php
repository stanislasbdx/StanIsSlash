<?php
function loadClasses($classe){
	require "$classe.php";
}
spl_autoload_register("loadClasses");

$Functions = new Functions();

require "private/db_logs.php"; // Les credentials sont ignorés pour éviter une intrusion sur la base de donnée.
$BDD = new mysqli($_servername, $_username, $_password, "hostcrus_projects");
?>