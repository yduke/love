const version = 1;
const cacheStorageKey = "testCache-" + version;

const cacheList = [
"./", 
"./index.html", 
"./manifest.json", 
"./data.dat", 
"./css/style.css", 
"./css/animsition.min.css", 
"./img/logo.svg", 
"./img/reload.svg", 
"./img/icons/icon-512x512.png", 
"./img/icons/icon-72x72.png", 
"./img/icons/icon-96x96.png", 
"./img/icons/icon-128x128.png", 
"./img/icons/icon-144x144.png", 
"./img/icons/icon-152x152.png", 
"./img/icons/icon-192x192.png", 
"./img/icons/icon-384x384.png", 
"./js/animsition.min.js", 
"./js/jquery.min.js", 
"./js/scripts.js", 
];

self.addEventListener("install", function(e) {
//  console.log("Cache event!");
  e.waitUntil(
    caches.open(cacheStorageKey).then(function(cache) {
//      console.log("Adding to Cache:", cacheList);
      return cache.addAll(cacheList);
    })

  );
});

self.addEventListener("activate", event => {
//  console.log("Activate event");
  event.waitUntil(
    caches
      .keys()
      .then(cacheNames => {
        return cacheNames.filter(cacheName => cacheStorageKey !== cacheName);
      })
      .then(cachesToDelete => {
        return Promise.all(
          cachesToDelete.map(cacheToDelete => {
            return caches.delete(cacheToDelete);
          })
        );
      })
      .then(() => {
//        console.log("Clients claims.");
        self.clients.claim();
      })
  );
});

self.addEventListener("fetch", function(e) {
  e.respondWith(
    caches.match(e.request).then(function(response) {
      return response || fetch(e.request);
    })
  );
});

self.addEventListener("message", event => {
  if (event.data === "skipWaiting") {
//    console.log("Skip waiting!");
    self.skipWaiting();
  }
});