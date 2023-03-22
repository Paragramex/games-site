<?php
if (isset($_GET['game'])){
	$game = $_GET['game'];
include("../view/pages/loadgame.php");
} else if (isset($_GET['error'])){
	if ($_GET['error'] == "nostaffgame"){
		echo "<p style='color:white;'>No current staff favorites. Comeback later :)</p>";
	} else {
	include("../view/pages/error.php");
	}
} else if ($_GET['page']){
$page = $_GET['page'];

	if($page == "account"){include("../view/pages/account.php");}
	if($page == "home"){include("../view/pages/home.php");}
	if($page == "login"){include("../view/pages/login.php");}
	if($page == "register"){include("../view/pages/register.php");}
	// if not view or games trigger this:
	} else {
	include("../view/pages/error.php");
	}
?>