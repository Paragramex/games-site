<?php

if (isset($_GET['game'])){
	
	$game = $_GET['game'];

include("../view/pages/loadgame.php");
	
} else {
	include("../view/pages/error.php");
}
?>