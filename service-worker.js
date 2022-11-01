const CACHE_NAME = 'ArkTopCache';


// List of files which are store in cache.
let filesToCache = [
    '/*.php',
    '/*.js',
    '/*.json',
    '/*.txt',
    '/php/contact.php',
    '/contact.php',
    '/about.php',
    '/home.php',
    '/certificate.php',
    '/galeria.php',
    '/galeria-photo.php',
    '/galeria-iv.php',
    '/css/style.css',
    '/css/reset.css',
    '/css/yourstyle.css',
    '/css/all.css',
    '/css/solid.css',
    '/css/*.css',
    '/less/*.less',
    '/scss/*.scss',
    '/scss/fontawesome.scss',
    '/sprites/*.svg',
    '/metadata/',
    '/errordocs/',
    '/stats/',
    '/svgs/',
    '/images/fotografia.webp',
    '/images/identyfikacja.webp',
    '/images/grafika.jpg',
    '/js/',
    '/js/brands.js',
    '/js/solid.js',
        '/js/regular.js',
            '/js/fontawesome.js',
                '/js/brands.js',
                    '/js/all.js',
    '/js/*.js',
    '/php/',
    '/webfonts/fa-solid-900.svg.woff2',
    '/webfonts/fa-solid-900.svg.woff',
    '/webfonts/*.woff2',
    '/webfonts/*.svg',
    '/webfonts/*.eot',
];

self.addEventListener('install', function (evt) {
    evt.waitUntil(
        caches.open(CACHE_NAME).then(function (cache) {
            return cache.addAll(filesToCache);
        }).catch(function (err) {
            // Snooze errors...
            // console.error(err);
        })
    );
});

self.addEventListener('fetch', function (evt) {
    // Snooze logs...
    // console.log(event.request.url);
    evt.respondWith(
        // Firstly, send request..
        fetch(evt.request).catch(function () {
            // When request failed, return file from cache...
            return caches.match(evt.request);
        })
    );
});