const mix = require("laravel-mix");

mix
  .options({
    processCssUrls: false,
  })
  .webpackConfig({
    stats: {
      children: true,
    },
  })
  .disableNotifications();

mix.sass('./assets/scss/style.scss', './assets/css/all.min.css');


mix
  .js("./assets/working-js-files/custom.js", "./assets/js/all.min.js")
  // .autoload({
  //   jquery: ["$", "window.jQuery", "jQuery"],
  // })
  .sourceMaps();
