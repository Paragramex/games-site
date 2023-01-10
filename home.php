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
		<h5>What is this?</h5> 
    <p>This site is a collection of games compiled by paragram for easy playing.</p>
    <h3> Disclaimer: </h3>
    <p><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars_decode($name->disclaimer);
		} ?></p>

    <a href="https://minekhan.thingmaker.repl.co/"><button class="extrabuttons button">MineKhan 1.0.5 (a clone of minecraft thats also fun)</button></a>
    <a href="/login.php"><button class="extrabuttons button">View Our Collection</button></a>
    <a class="isDisabled"><button class="extrabuttons button">Submit a Client Here! [Coming Soon]</button></a>

  </div>
  <div class="main">
    <!--<h3>TITLE HEADING</h3>
    <h5>Title description, Dec 7, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>-->
<h2>Play the staff pick, NO ACCOUNT NEEDED!</h2>
<!--<button onclick="makeFullScreen()" class="extrabuttons button">Full Screen</button>-->
<iframe src="/clients/vanilla.html" id="openframe" style="top:0; left:0; bottom:0; right:0; width:100%; height:71%; border:none; margin:0; padding:1%; overflow:hidden;">
    Your browser doesn't support iframes, sorry but your computer wont even run this site. maybe go get another computer
</iframe>
		<br>
		    <a href="/login.php"><button class="extrabuttons button">Browse all the clients</button></a>
  </div>
</div>
<?php require_once($path.'/system/foot.php');  ?>

