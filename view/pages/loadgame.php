<?php
if (isset($_GET['game'])){
	
	$gameurl = $_GET['game'];

	$game = base64_decode($gameurl);

if (strpos($game, 'https://') === false) {
$game = "../view/pages/error.php";
}
echo '<iframe src="' . $game . '" style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;">client side err, your device doesnt support this game :(</iframe>';
	
} else {
	include("../view/pages/error.php");
}

?>

