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
<p>The servers that work with eaglercraft MUST support 1.5.2 and if it does, it can be any real Minecraft server. This is the list hosted on the official eaglercraft client, if a server is added there, paragram will add it here.</p>
			<table>
      <?php
      $d = json_decode(file_get_contents('db/servers.json'), true);
      foreach ($d as &$value) {
          // echo "<tr><td>test</td><td>thing</td></tr>"; 
          echo "<tr><td>".$value[0]."</td><td>".$value[1]."</td><td><button class='copyme extrabuttons button'data-clipboard-text=".$value[1].">Copy</button></td></tr>";
      }
      ?>
		</table>
			
		</main>
</div>
</div>
</div>

<?php require_once($path.'/system/foot.php');  ?>

