<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path.'/system/head.php');
	?>
  <div class="main" >
<div class="content">
		<header>
			<h2>Servers<h2>
			</header>
		<main>
<p>Our games are hosted on these servers:</p>
			<table>
      <?php
      $d = json_decode(file_get_contents('db/servers.json'), true);
      foreach ($d as &$value) {
          // echo "<tr><td>test</td><td>thing</td></tr>"; 
          echo "<tr><td>".$value[0]."</td><td>".$value[1]."</td></tr>";
      }
      ?>
		</table>
			
		</main>
</div>
</div>
</div>

<?php require_once($path.'/system/foot.php');  ?>

