const mix = require('laravel-mix')
const tailwindcss = require('tailwindcss')
const glob = require('glob-all')
const PurgecssPlugin = require('purgecss-webpack-plugin')

/* ==========================================================================
  Config
  ========================================================================== */
  const config = {
    siteUrl: 'dogpatchdev.test',
    proxyUrl: 'https://dogpatchdev.test',
    port: 3000,
    openOnStart: false,
    pathToLocalSSLCert: '',
    pathToLocalSSLKey: '',
    filesToWatch: [
      './**/*.php',
      './**/*.html',
      'src/scss/**/*.scss',
      'src/js/**/*.js',
      'src/img/*',
      'src/js/components/**/*.vue',
      'src/tailwind-config.js',
    ]
  }

/* ==========================================================================
  Purge CSS Extractors
  ========================================================================== */
  class TailwindExtractor {
    static extract(content) {
      return content.match(/[A-z0-9-:\/]+/g) || []
    }
  }

/* ==========================================================================
  Laravel Mix Config
  ========================================================================== */
mix
  // handle JS files
  .js('src/js/app.js', 'dist/js/bundle.min.js')
  .disableNotifications()

  // Sass files and Tailwind CSS Config
  .sass('src/scss/app.scss', 'dist/css/bundle.min.css')
  .disableNotifications()
  .options({
    processCssUrls: false,
    postCss: [tailwindcss('src/tailwind-config.js')],
    autoprefixer: {
      options: {
        browsers: ['last 10 versions'],
      },
    },
  })

  // Move images to dist directory
  .copyDirectory('src/img', 'dist/img')

  // Move fonts to dist directory
  .copyDirectory('src/fonts', 'dist/fonts')

  // BrowserSync
  .browserSync({
    proxy: config.proxyUrl,
    host: config.siteUrl,
    open: config.openOnStart,
    port: config.port,
    https: {
      key: config.pathToLocalSSLKey,
      cert: config.pathToLocalSSLCert
    },
    files: config.filesToWatch
  })

// remove unused CSS from files - only used when running npm run production
if (mix.inProduction()) {
  mix.options({
    uglify: {
      uglifyOptions: {
        mangle: true,

        compress: {
          warnings: false, // Suppress uglification warnings
          pure_getters: true,
          conditionals: true,
          unused: true,
          comparisons: true,
          sequences: true,
          dead_code: true,
          evaluate: true,
          if_return: true,
          join_vars: true,
        },

        output: {
          comments: false,
        },

        exclude: [/\.min\.js$/gi], // skip pre-minified libs
      },
    },
  })

  // Purge CSS config
  // more examples can be found at https://gist.github.com/jack-pallot/217a5d172ffa43c8c85df2cb41b80bad
  mix.webpackConfig({
    plugins: [
      new PurgecssPlugin({
        paths: glob.sync([
          path.join(__dirname, './**/*.php'),
          path.join(__dirname, 'src/js/**/*.js'),
          path.join(__dirname, 'src/js/components/**/*.vue'),
        ]),

        extractors: [
          {
            extractor: TailwindExtractor,
            extensions: ['html', 'php', 'js', 'vue'],
          },
        ],

        whitelist: [
          'p',
          'h1',
          'h2',
          'h3',
          'h4',
          'h5',
          'h6',
          'hr',
          'ol',
          'ol li',
          'ul',
          'ul li',
          'em',
          'b',
          'strong',
          'blockquote',
        ],

        whitelistPatterns: [],
      }),
    ],
  })
}
