<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Offline</title>
		<!--stylesheet has to be inline to be cached-->
    <style>
      body {
        font-family: helvetica, arial, sans-serif;
        margin: 2em;
      }

      h1 {
        font-style: italic;
        color: #373fff;
      }
      
      p {
        margin-block: 1rem;
      }
      
      button {
        display: block;
      }
    </style>    
  </head>
  <body>
    <h1>You are offline</h1>

    <p>
      The page will automatically reload once the connection is re-established.
      Click the button below to try reloading manually.      
    </p>
    <button type="button">⤾ Reload</button>
    
    <!--js has to be inline to be serverd offline/cached-->
    <script>
      document.querySelector('button').addEventListener('click', () => {
        window.location.reload();
      });
    //look for network connection
      window.addEventListener('online', () => {
        window.location.reload();
      });

      //if server is offline
      async function checkNetworkAndReload() {
        try {
          const response = await fetch('.');
          // Verify we get a valid response from the server
          if (response.status >= 200 && response.status < 500) {
            window.location.reload();
            return;
          }
        } catch {
          // Unable to connect to the server, ignore.
        }
        window.setTimeout(checkNetworkAndReload, 2500);
      }

      checkNetworkAndReload();

    </script>
  </body>
</html>
