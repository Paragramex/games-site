<script>
//disabled links section
window.onload=function(){
document.body.addEventListener('click', function (event) {
  // filter out clicks on any other elements
  if (event.target.nodeName == 'A' && event.target.getAttribute('aria-disabled') == 'true') {
    event.preventDefault();
  }
});
};


	var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}

//fullscreen thing
	function requestFullScreen(element) {
    // Supports most browsers and their versions.
    var requestMethod = element.requestFullScreen || element.webkitRequestFullScreen || element.mozRequestFullScreen || element.msRequestFullscreen;

    if (requestMethod) { // Native full screen.
        requestMethod.call(element);
    } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
        var wscript = new ActiveXObject("WScript.Shell");
        if (wscript !== null) {
            wscript.SendKeys("{F11}");
        }
    }
}

function makeFullScreen() {
    document.getElementsByTagName("iframe")[0].className = "fullScreen";
    var elem = document.body;
    requestFullScreen(elem);
}
	
 

/*
if ( window !== window.parent ) 
{
	alert("plz open in new tab");
} */
	
//Cursor thingy. DONT MESS WITH STUPID
(function () {
  const defaults = {
    color: "#fff",
    size: 20,
    trailColor: "#fff",
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
	const stupidnoerrorthingy1 = async () => {
  await delay(5000);
  document.body.appendChild(cursor)
  console.log("Waited an additional 5s to prevent errors");
};

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
</script>
