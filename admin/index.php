<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path.'/system/head.php');
require_once($path.'/admin/lib.php');
if(!isset($_SESSION['admin'])){
		echo "<script>window.location.replace($path'/home.php')</script>";
		exit();
	}


//work on later :/
	$userdb = json_decode(file_get_contents($path.'/db/users.json'));
if (isset($_POST['userdelete'])) {
	$userdb->$username == $_POST["username"];
	$userdb->$email == $_POST["email"];
	$userdb->$password == $_POST["password"];
			unset($userdb->$username);
			unset($userdb->$email);
			unset($userdb->$password);
$status = fwrite(fopen($path.'/db/users.json', 'w+'),
json_encode($userdb));
	}

	
	?>

  <div class="main">
	
<div class="content">
		<header>
			<h2>Admin Panel<h2>
			<a href="?logout">Log out</a>
			</header>
		<main>
			<h3>Links</h3>
			<p>Logs: <a href="/admin/logs.php">>admin>logs.php</a></p>
			<p>Control Panel: <a href="/admin/panel.php">>admin>panel.php</a></p>
			</p>
		</main>
				<hr class="rounded">
				<h3>User list:</h3>
				<table>
					
<?php

//Read the content of a JSON file

$users = file_get_contents($path.'/db/users.json');

//Decode the JSON data into an array

$decoded_data = json_decode($users, true);

echo "<tr>
    <th>User</th>
    <th>Email</th>
    <!--<th>Actions</th>-->
  </tr>";

//Print the JSON data

foreach($decoded_data as $user) {

$username = $user['username'];

$email = $user['email'];

$pass = $user['password'];

$self = $_SERVER['PHP_SELF'];
	
echo "
<tr>
	<form action=".$_SERVER['PHP_SELF']." method='post'>
    <td>$username</td>
    <td>$email</td>
<input style='position:absolute;display: none' type='text' name='username' value='$username'>
<input style='position:absolute;display: none' type='text' name='email' value='$email'>
<input style='position:absolute;display: none' type='text' name='password' value='$pass'>
		<!--<td><input type='submit' name='userdelete' value='Delete'></td>-->
</form>
  </tr>";

}

?>
</table>
</div>
</div>
</div>

<?php require_once($path.'/system/foot.php');  ?>

