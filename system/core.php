<?php
function loadClasses($classe){
	require $classe . ".php";
}
spl_autoload_register("loadClasses");

$Functions = new Functions();

require "private/db_logs.php";
$BDD = new mysqli($_servername, $_username, $_password, "hostcrus_projects");
?>