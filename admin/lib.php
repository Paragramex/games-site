<?php 


//site title function
if (isset($_POST['sitetitle'])) {
		$config->sitetitle = $_POST['sitetitle'];
		if ($_POST['sitetitle'] == '') 
			unset($config->sitetitle);
		$status = fwrite(fopen($path.'/db/site.json', 'w+'), json_encode($config));
	}


if (isset($_POST['favicon'])) {
		$config->favicon = $_POST['favicon'];
		if ($_POST['favicon'] == '') 
			unset($config->favicon);
		$status = fwrite(fopen($path.'/db/site.json', 'w+'), json_encode($config));
	}


if (isset($_POST['footer'])) {
		$config->footer = $_POST['footer'];
		if ($_POST['footer'] == '') 
			unset($config->footer);
		$status = fwrite(fopen($path.'/db/site.json', 'w+'), json_encode($config));
	}



if (isset($_POST['headtitle'])) {
		$config->headtitle = $_POST['headtitle'];
		if ($_POST['headtitle'] == '') 
			unset($config->headtitle);
		$status = fwrite(fopen($path.'/db/site.json', 'w+'), json_encode($config));
	}


if (isset($_POST['headfooter'])) {
		$config->headfooter = $_POST['headfooter'];
		if ($_POST['headfooter'] == '') 
			unset($config->headfooter);
		$status = fwrite(fopen($path.'/db/site.json', 'w+'), json_encode($config));
	}

if (isset($_POST['aboutsite'])) {
		$config->aboutsite = $_POST['aboutsite'];
		if ($_POST['aboutsite'] == '') 
			unset($config->aboutsite);
		$status = fwrite(fopen($path.'/db/site.json', 'w+'), json_encode($config));
	}

if (isset($_POST['disclaimer'])) {
		$config->disclaimer = $_POST['disclaimer'];
		if ($_POST['disclaimer'] == '') 
			unset($config->disclaimer);
		$status = fwrite(fopen($path.'/db/site.json', 'w+'), json_encode($config));
	}

$userdb = json_decode(file_get_contents($path.'/db/users.json'));
if (isset($_POST['userdelete'])) {
	$userdb->$username == $_POST["username"];
	$userdb->$email == $_POST["email"];
	$userdb->$password == $_POST["password"];
			unset($userdb->$username);
			unset($userdb->$email);
			unset($userdb->$password);
$status = fwrite(fopen($path.'/db/users.json', 'w+'), json_encode($userdb));
	}



if (isset($_POST['aboutlogin'])) {
		$config->aboutlogin = $_POST['aboutlogin'];
		if ($_POST['aboutlogin'] == '') 
			unset($config->aboutlogin);
		$status = fwrite(fopen($path.'/db/site.json', 'w+'), json_encode($config));
	}


?>