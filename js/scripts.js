window.onload = function(){
	var bar = document.getElementById("bar");
	var int=setInterval(function(){
		bar.dataset.progress--;
		if(bar.dataset.progress<=9){
			bar.dataset.progress='0'+ bar.dataset.progress;
			bar.style.width = bar.dataset.progress *10-10 +'%'
		}
		if(bar.dataset.progress==0){
			clearInterval(int);
			window.location.reload();
		}
	},1000);
};
jQuery(document).ready(function($){
//read data output random one
	$.get("././data.dat",null,function(data){
		var strs = new Array();
		strs=data.split(/[(\r\n)\r\n]+/); 
		var str = strs[Math.floor(Math.random()*strs.length)];
		$('#sentence').html(str);
	});
//animsition	
 $('.main-wrapper').animsition({
	inDuration: 800,
    outDuration: 200,
	linkElement: 'a:not([target="_blank"]):not([href^="#"])',
	timeout: true,
	timeoutCountdown: 5000,
 });
url = window.location.href;
$('#logo_a').attr("href",url);
 });

//Service worker
function changeModel() {
console.log('Modle changed');
}

    navigator.serviceWorker.addEventListener("controllerchange", () => {
      window.location.reload();
    });


    window.addEventListener("load", function() {
      const sw = window.navigator.serviceWorker;
      const killSW = window.killSW || false;
      if (!sw) {
        return;
      }

      if (!!killSW) {
        sw.getRegistration("./sw.js").then(registration => {
          registration.unregister && registration.unregister();
          window.caches &&
            caches.keys &&
            caches.keys().then(function(keys) {
              keys.forEach(function(key) {
                caches.delete(key);
              });
            });
        });
      } else {
        sw.register("./sw.js")
          .then(registration => {
//            console.log("Registered events at scope: ", registration.scope);
            if (registration.waiting) {
              changeModel();
              return;
            }
            registration.onupdatefound = function() {
              const installingWorker = registration.installing;
              installingWorker.onstatechange = function() {
                switch (installingWorker.state) {
                  case "installed":
                    if (navigator.serviceWorker.controller) {
                      changeModel();
                    }
                    break;
                }
              };
            };
          })
          .catch(err => {
            console.error(err);
          });
      }
    });