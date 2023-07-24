# Base WordPress theme

## Important concepts

- [WP CLI `dotenv` command](https://github.com/aaemnnosttv/wp-cli-dotenv-command)
- [Bedrock](https://roots.io/docs/bedrock/master/installation/) (Wordpress theme structure).

## Initializing

```bash
# Switching to the right version of nodejs using nvm (node version manager)
# If you don't have it installed go to https://nvm.sh/ for instructions
nvm use
# Generate configuration and secrets
wp dotenv init --template=.env.example --with-salts --interactive
# Frontend requirements
npm install
# Backend requirements
composer install
```

## Development mode

In development mode Webpack will compile your SCSS (with autoprefixer) and JS (ES6) files and start a Browsersync server continually watching your changes. Files will also be written to `assets/dist`. The entry points are `assets/js/index.js` and `assets/scss/index.scss`.

Assuming your local WordPress installation is served at http://example.test, you can run the Browsersync server like this:

```bash
# Short version
npm run dev proxy="example.test"
# Long version
npm start -- --env proxy="example.test"
```

Now the proxied site with auto-reload will be available at http://localhost:3000. The regular site without auto-reload will still be available at the original URL.

You can also modify the dev script located in package.json with your local url to save some time.

```json
"scripts": {
  "dev": "npm run start -- --env proxy='example.test'"
}
```

## Production mode

In production mode Webpack will compile your assets and create minified files in `assets/dist`. You can then transfer these files to the server by using FTP or `rsync`. To compile in production mode:

```bash
npm run build
# To delete previous assets/dist folder and build
npm run build:full
```

The resulting files are generated with unique names by Webpack to get automatic cache-busting when enqueued in WordPress.

## Code style

Linting is configured in `assets/.eslintrc` (JS), `assets/.stylelintrc` (CSS), and `.php_cs.dist` (PHP). Check the files for the configuration details.

Linters can be run with:

```bash
# Frontend files
npm run lint:js
npm run lint:css

# PHP files
composer run-script lint
```

## Additional Scripts

```bash
# deletes previous assets/dist folder and runs npm run dev
npm run dev:full proxy="<yourWebsite.test>"
# deletes previous assets/dist folder and runs npm run build
npm run build:full
# Lint js and css
npm run lint:full
```
