# Dogpatch

### A WordPress starter theme including Webpack (via Laravel Mix), Vue, Babel and Tailwind CSS.

----------

## Inside Dogpatch

### Javascript

* A Webpack build system via Laravel Mix
* Babel and ES Next support
* ES2015 module support
* Support for VueJS and Vue single file components
* Build scripts - minifying, concatenation and renaming
* Hot module reloading
* Prettier config (can be adjusted if you prefer tabs over spaces)

## CSS
* Support for Sass
* ITCSS directory structure for your Sass files
* Zero setup Tailwind CSS framework support
* Accessibility utilities for Tailwind CSS
* Purge CSS to eliminate dead code (HTML, PHP, JS and Vue files)

## WordPress
* Optional helper functions for cleaning up WordPress, improving the core functionality and template utilities. Functions can be commented out and don't run by default
* Component inheritance using the get_template_partial() function - letting you pass in props to a PHP template for DRY templating
* .gitignore file with common patterns

----------

## Getting Started

### Installing
Download the ZIP or clone the repository into your WordPress themes directory.

`$ cd` into the theme directory.

**Install the project dependencies using NPM or Yarn:**

<pre><code>npm install</code></pre>
<pre><code>yarn install</code></pre>

Amend the webpack.mix.js file with your settings.

Amend the src/tailwind.config.js file with your custom CSS classes.

### Development

**To run a single instance of the dev build:**

<pre><code>npm run dev</code></pre>
<pre><code>yarn run dev</code></pre>

**To watch files through with live browser reloading:**

<pre><code>npm run watch</code></pre>
<pre><code>yarn run watch</code></pre>

### Hot Module Reloading

**Hot module reloading is possible using the following:**

<pre><code>npm run hot</code></pre>
<pre><code>yarn run hot</code></pre>

### Production

**Building for production will run the following tasks:**

* Convert ES Next using Babel
* Minify and concat Sass and JS files
* Run PurgeCSS to eliminate dead code
* Auto-prefix
* Move to /dist directory

<pre><code>npm run production</code></pre>
<pre><code>yarn run production</code></pre>

----------

## Updating
**Updates and instructions will be displayed here.**

No auto-updates through WordPress or child themes. These methods tend to cause behind the scenes conflicts and often cause more problems than they solve. Instead you can choose to patch the areas manually if you wish to do so, however, the benefit of being clean-slate means that updates should only require only minor changes.

----------

## Todo

 - Look at extracting Tailwind somehow as an optional dependency
 - Built in linting using ES Lint
 - Built in testing using Vue Testing Tools and either Mocha or Jest.

----------

## License
[GNU General Public License v3.0](https://choosealicense.com/licenses/lgpl-3.0/)