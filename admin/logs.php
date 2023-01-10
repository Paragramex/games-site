<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path.'/system/head.php');
if(!isset($_SESSION['admin'])){
		echo "<script>window.location.replace($path'/home.php')</script>";
		exit();
	}?>
  <div class="main">
	
<div class="content">
		<header>
			<h2>Admin Logs</h2>
			<a href="?logout">Log out</a>
			</header>
		<main>
			<?php
$path = $_SERVER['DOCUMENT_ROOT'];
// Open log file
$logfile = $path."/db/logs.txt";

if (file_exists($logfile)) {
    $handle = fopen($logfile, "r");
    $log = fread($handle, filesize($logfile));
    fclose($handle);
} else {
    die ("The log file doesn't exist!");
}
// Seperate each logline
$log = explode("\n", trim($log)); 
// Seperate each part in each logline
for ($i = 0; $i < count($log); $i++) {
    $log[$i] = trim($log[$i]);
    $log[$i] = explode('|', $log[$i]);
}
?>
<div class="visitcounter"><h3 style="color:#86A8E7;">Site Visits: <?php $content = file_get_contents($path.'/db/visitcount.txt');
echo $content; ?></h3></div>

<?php
echo '<table>';
echo '<th>Type</th>';
echo '<th>Info</th>';
echo '<th>Date</th>';

foreach ($log as $logline) {
    echo '<tr>';
    echo '<td>' . $logline['0'] . '</td>';
    echo '<td>' . $logline['1'] . '</td>';
    echo '<td>' . date("Y-m-d h:i:sa", $logline['2'])  . '</td>';

    echo '</tr>';

}

echo '</table>';

?>
		</main>

<table>
</table>
</div>
</div>
</div>
</div>

<?php require_once($path.'/system/foot.php');  ?>
