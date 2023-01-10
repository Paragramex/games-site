<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path.'/system/head.php');
$config = json_decode(file_get_contents($path.'/db/site.json'));
?>
<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path.'/system/head.php');
require_once($path.'/admin/lib.php');
if(!isset($_SESSION['admin'])){
		echo "<script>window.location.replace($path'/home.php')</script>";
		exit();
	}
	?>
   <style>
	
</style>
  <div class="main" >
	
<div class="content">
		<header>
			<h2>Admin Panel<h2>
			<a href="?logout">Log out</a>
			</header>
		<main>
</main>
				<table>
  <tr>
    <th><center>Action</center></th>
		<th><center>Status: <?php if ($status) { echo '<p style="color:green;">Success!</p>'; } else { echo '<p style="color:red;">Could not save</p>';}?></center></th>
  </tr>
			<tr>
		<td>Edit Title</td>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

		<td><textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' name="sitetitle" style="display:block;max-width:95%;"><?php 
	if (isset($config->sitetitle)) {
		echo htmlspecialchars($config->sitetitle);
	}
?></textarea>
<input type="submit" value="Save" /></td>
			</tr>
</form>
	<tr>
		<td>Edit Favicon </td>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

		<td><textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' name="favicon" style="display:block;max-width:95%;"><?php 
	if (isset($config->favicon)) {
		echo htmlspecialchars($config->favicon);
	}
?></textarea>
<input type="submit" value="Save"/></td>
				</form>
			</tr>
<tr>
		<td>Edit Footer </td>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

		<td><textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' name="footer" style="display:block;max-width:95%;"><?php 
	if (isset($config->footer)) {
		echo htmlspecialchars($config->footer);
	}
?></textarea>
<input type="submit" value="Save"/></td>
				</form>
			</tr>
<tr>
		<td>Edit Head Title</td>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

		<td><textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' name="headtitle" style="display:block;max-width:95%;"><?php 
	if (isset($config->headtitle)) {
		echo htmlspecialchars($config->headtitle);
	}
?></textarea>
<input type="submit" value="Save"/></td>
				</form>
			</tr>
<tr>
		<td>Edit Head Footer</td>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

		<td><textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' name="headfooter" style="display:block;max-width:95%;"><?php 
	if (isset($config->headfooter)) {
		echo htmlspecialchars($config->headfooter);
	}
?></textarea>
<input type="submit" value="Save"/></td>
				</form>
			</tr>
<tr>
		<td>Edit About Site</td>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

		<td><textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' name="aboutsite" style="display:block;max-width:95%;"><?php 
	if (isset($config->aboutsite)) {
		echo htmlspecialchars($config->aboutsite);
	}
?></textarea>
<input type="submit" value="Save"/></td>
				</form>
			</tr>
<tr>
		<td>Edit Disclaimer</td>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

		<td><textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' name="disclaimer" style="display:block;max-width:95%;"><?php 
	if (isset($config->disclaimer)) {
		echo htmlspecialchars($config->disclaimer);
	}
?></textarea>
<input type="submit" value="Save"/></td>
				</form>
			</tr>
<tr>
		<td>Edit About Login</td>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

		<td><textarea oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"' name="aboutlogin" style="display:block;max-width:95%;"><?php 
	if (isset($config->aboutlogin)) {
		echo htmlspecialchars($config->aboutlogin);
	}
?></textarea>
<input type="submit" value="Save"/></td>
				</form>
			</tr>
</table>
</div>
</div>
</div>

<?php require_once($path.'/system/foot.php');  ?>