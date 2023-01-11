<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path.'/system/head.php');
if(!isset($_SESSION['user'])){
	$_SESSION['pagetitle'] = "Home";
		echo "<script>window.location.replace('home.php')</script>";
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
} ?>
				<table>
  <tr>
    <th>Game</th>
  </tr>
  <tr>
    <td><a href="/clients/Kerosene.html">Kerosene</a></td>
  </tr>
	<tr>
    <td><a href="/clients/ayuncraft/index.html">AyunCraft Client</a></td>
  </tr>
	<tr>
    <td><a href="/clients/fuchsiaxghostwithaltmanager.html" >Fuchsiax Ghost Client + Alts</a></td>
  </tr>
		<tr>
    <td><a href="/clients/resentpvp.html">Resent PVP Client</a></td>
  </tr>
					
		<tr>
    <td class="isDisabled"><a href="/clients/precisionclientbeta.html" aria-disabled="true">Precision Client BETA</a></td>
  </tr>
		<tr>
    <td><a href="/clients/nitclient2.html">NitClient 2.0</a></td>
  </tr>
		<tr>
    <td><a href="/clients/nitclient.html">NitClient</a></td>
		</tr>
	<tr>
    <td><a href="/clients/codercraft.html">Codercraft</a></td>
  </tr>
	<tr>
    <td class="isDisabled"><a href="" aria-disabled="true">Fuchsiax Client</a></td>
  </tr>
</table>
</div>
</div>
</div>

<?php require_once($path.'/system/foot.php');  ?>

