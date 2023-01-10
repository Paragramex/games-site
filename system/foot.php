<div class="footer">
 <marquee scrollamount="15" > <p><?php if (file_exists($path.'/db/site.json')) {
			$name = json_decode(file_get_contents($path.'/db/site.json'));
			echo htmlspecialchars_decode($name->footer);} ?></p></marquee>
</div>
<script src="/assets/clipboard.min.js"></script>
<script>

	 
//Cursor thingy. DONT MESS WITH STUPID
(function () {
  const defaults = {
    color: "#00C2C7",
    size: 50,
    trailColor: "#6CBAA2",
    trailTime: 300,
    showTrail: true,
  }

  let config = {}

  try {
    config = { ...defaults, ...mouseeeConfig }
  } catch (e) {
    config = defaults
  }

  // CREATING CURSOR
  const cursor = document.createElement("div")
  const pointer = document.createElement("div")
  cursor.appendChild(pointer)
  document.body.appendChild(cursor)

  //CURSOR STYLE 
  cursor.style.position = "absolute"
  cursor.style.width = `${config.size}px`
  cursor.style.height = `${config.size}px`
  cursor.style.border = `1px solid ${config.color}`
  cursor.style.borderRadius = "50%"
  cursor.style.display = "flex"
  cursor.style.justifyContent = "center"
  cursor.style.alignItems = "center"
  cursor.style.pointerEvents = "none"

  // POINTER STYLE 
  pointer.style.position = "absolute"
  pointer.style.width = `${config.size * 0.4}px`
  pointer.style.height = `${config.size * 0.4}px`
  pointer.style.borderRadius = "50%"
  pointer.style.backgroundColor = config.trailColor

  //MOVING CURSOR
  document.addEventListener("mousemove", (e) => {
    cursor.style.top = `${e.pageY - config.size / 2}px`
    cursor.style.left = `${e.pageX - config.size / 2}px`

    if (config.showTrail) {
      const trail = document.createElement("div")
      trail.style.backgroundColor = config.trailColor
      trail.style.width = `${config.size * 0.4}px`
      trail.style.height = `${config.size * 0.4}px`
      trail.style.position = "absolute"
      trail.style.borderRadius = "50%"
      trail.style.top = `${e.pageY - (config.size * 0.4) / 2}px`
      trail.style.left = `${e.pageX - (config.size * 0.4) / 2}px`
      trail.style.pointerEvents = "none"
      document.body.appendChild(trail)

      setTimeout(() => {
        document.body.removeChild(trail)
      }, config.trailTime)
    }
  })

  document.addEventListener("scroll", (e) => {
    cursor.style.top = "-100px"
  })
})()
	
	// clipboard.js
	
 var clipboard = new ClipboardJS('.copyme');

      clipboard.on('success', function (e) {
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
      });

      clipboard.on('error', function (e) {
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
      });

</script>
</body>
</html>