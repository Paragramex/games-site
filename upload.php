<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path.'/system/head.php');
?>


<div class="row">
  <div class="side">
    <h2>About the site</h2>
    <h5>What its for:</h5>
		<p><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars_decode($name->aboutsite);
		} ?></p>
	<div class="visitcounter"><h3 style="color:#86A8E7;">Site Visits: <?php $content = file_get_contents($path.'/db/visitcount.txt');
echo $content; ?></h3></div>
		<h5>What is EaglerCraft?</h5> 
    <p> Eaglercraft is a 1.5.2 minecraft javascript runtime made by LAX1DUDE. to put it simply its a way to play 1.5.2 minecraft on the web.</p>
    <h3> Disclaimer: </h3>
    <p><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars_decode($name->disclaimer);
		} ?></p>

    <a href="/home.php"><button class="extrabuttons button">Go Home</button></a>
    <a href="/login.php"><button class="extrabuttons button">View Our Collection</button></a>

<form action="<?php echo '/system/uploadfile.php'?>" method="post" enctype="multipart/form-data">
  Select txt file to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload TXT" name="submit">
</form>

  </div>
  <div class="main">
<h2>Upload a Client</h2>

		<br>
  </div>
</div>
<?php require_once($path.'/system/foot.php');  ?>

