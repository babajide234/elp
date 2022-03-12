const config = require('./webpack.config');
const mix = require('laravel-mix');
require('laravel-mix-eslint');

mix.webpackConfig(config);

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js('resources/js/app.js', 'public/js')
  .extract([
    'vue',
    // 'axios',
    // 'vuex',
    // 'vue-router',
    // 'vue-i18n',
    // 'element-ui',
    // 'echarts',
    // 'highlight.js',
    // 'sortablejs',
    // 'dropzone',
    // 'xlsx',
    // 'tui-editor',
    // 'codemirror',
  ])
  // .postCss('resources/sass/app.scss', 'public/css', [
  //   require('tailwindcss'),
  // ])
  .options({
    processCssUrls: false,
    postCss: [
      require('autoprefixer'),
      // require('tailwindcss'),
    ],
  });

if (mix.inProduction()) {
  mix.version();
} else {
  if (process.env.LARAVUE_USE_ESLINT === 'true') {
    mix.eslint();
  }
  // Development settings
  mix
    .sourceMaps()
    .webpackConfig({
      devtool: 'cheap-eval-source-map', // Fastest for development
    });
}
