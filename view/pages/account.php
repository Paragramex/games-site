<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path.'/system/head.php');
if(!isset($_SESSION['user'])){
	$_SESSION['pagetitle'] = "Home";
		echo "<script>window.location.replace('/view?page=home')</script>";
		exit();
	}
	?>

  <div class="main">
	
<div class="content">
		<header>
			<h2>User Panel<h2>
			<a href="?logout">Log out</a>
			</header>
		<main>
			<h3>User Info</h3>
			<p>Username: <?php echo $_SESSION['user'] ?></p>
			<!--<p>Contact: <<?php echo $_SESSION['mail'] ?></p>-->
			
			</p>
		</main>
				<hr class="rounded">
				<h3>Games list:</h3>
				<p>If you want to contribute, a way to do that is coming soon!!!</p>
<?php
if(!isset($_COOKIE['verified'])) {
  echo "Verification status is: [false]<br>";
	echo " [RELOAD PAGE TO RE-VERIFY] <br>";
} else {
  echo "Verification status is: [" . $_COOKIE['verified'] . "]<br>";
  echo "You have access to the following games:";
 ?>
		<table>
      <?php
      $d = json_decode(file_get_contents('db/games.json'), true);
      foreach ($d as &$value) {
          echo "<tr><td>".$value[0]."</td><td>".$value[1]."</td></tr>";
      }
      ?>
		</table>
	<?php } ?>
</div>
</div>
</div>

<?php require_once($path.'/system/foot.php');  ?>

