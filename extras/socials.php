<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
require_once($path.'/system/head.php');
?>
<div class="row">
  <div class="side">
    <h2>About the Social Login</h2>
    <h5>How to use:</h5>
		<p>Use the form to generate a button with the url in it. You may change the butoon but leave the url alone. Once a user logs in, they will be redirected to a file name ok.php, if they cancel the login, they go to cancel.php. I will provide example files to parse returned data soon. [WIP]</p>
		<br>
    <h3> Disclaimer: </h3>
    <p><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars_decode($name->disclaimer);
		} ?></p>

    <a href="https://minekhan.thingmaker.repl.co/"><button class="extrabuttons button">Login to an Account</button></a>
    <a href="/login.php"><button class="extrabuttons button">Register an Account</button></a>
  </div>
  <div class="main">
		<h3>Social Button Maker [WIP]</h3>
<input id="userinput" placeholder="your domain name here">
		<p>The site we will auth to: <i>https://<span id="userinputreflect"></span>/</i></p>
		<div>
        <input type="radio" name="perms" value="&permissions=mail" id="mail">
        <label for="xs">Email</label>
    </div>
    <div>
        <input type="radio" name="perms" value="&permissions=user" id="user">
        <label for="s">Username</label>
    </div>
    <div>
        <input type="radio" name="perms" value="&permissions=all" id="useremail">
        <label for="m">Username & Email</label>
    </div>
		<div>
        <input type="radio" name="perms" value="" id="useremail">
        <label for="m">None</label>
    </div>
    <p>
        <button id="generate" class="extrabuttons button">Generate my auth url</button>
    </p>
<p id="destination"></p>
    <p id="output"></p>
<script>
var inputBox = document.getElementById('userinput');

inputBox.onkeyup = function(){
    document.getElementById('userinputreflect').innerHTML = inputBox.value;
}


const btn = document.querySelector('#generate');        
        const radioButtons = document.querySelectorAll('input[name="perms"]');
        btn.addEventListener("click", () => {
            let selectedSize;
            for (const radioButton of radioButtons) {
                if (radioButton.checked) {
                    selectedSize = radioButton.value;
                    break;
                }
            }
            // show the output:
            output.innerText = selectedSize ? `${selectedSize}` : ``;
        });


const wrapper = document.getElementById('userinput');
const destination = document.getElementById('destination');
const button = document.getElementById('generate');
const encodeDecodeAppend = () => {
	let dat = wrapper.innerHTML;
	let data = "https://" + dat + "/";
  const encoded = btoa(data); //encoded HTML
  const decoded = atob(encoded); // decoded HTML
  destination.innerHTML = encoded;
};

button.addEventListener('click', encodeDecodeAppend);

</script>
  </div>
</div>
<?php require_once($path.'/system/foot.php');  ?>



