window.addEventListener('load', () => {
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/offlinesys.js');
		console.log('--- ⚙ Site attempting to register service worker... ---')
  }
});