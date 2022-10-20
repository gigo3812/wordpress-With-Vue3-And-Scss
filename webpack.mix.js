let mix = require('laravel-mix');
// your Wordpress theme name here
// const themePath = 'wp-content/themes/' + themename + '';
// const resources = themePath + '/resources';
var themename = "learnWordpress";
mix.setResourceRoot(`/${themename}/wp-content/themes/learnWprdpress/assets`);
mix.setPublicPath(`assets`);

// main app.js and public.css as style.css
mix.sass(`resources/scss/public.scss`, `/assets/css`).sourceMaps();
mix.js(`resources/js/app.js`, `assets/js`).vue();

// post
mix.sass(`resources/scss/post.scss`, `/assets/css`).sourceMaps();

// page
mix.sass(`resources/scss/page.scss`, `/assets/css`).sourceMaps();
