# Development setup

### Nodejs

You will need Node.js - Installing it gives you access to NPM. If you don't have the latest version, make sure you get it installed as it's very likley to get errors if you are not running the latest version. The current node version under which this theme is tested is `v5.0.0`. You can check your version by running `& node -v`.

**Updating installed Node.js is trough NPM :**
 
```
$ sudo npm cache clean -f
$ sudo npm install -g n
$ sudo n stable 
```

If you have not installed Node.js yet then you will simply get the latest version and work from there.

### Gulp

To run the gulpfile.js you will need gulp-cli. It's best to install it globaly. The command for that is `$ npm install --global gulp-cli`.

### Installing dependences

Run `$ npm install`. This will create `node_modules` folder. Don't worry, it is ignored from the .gitignore file. On Windows deleting this would be rather tricky, so you will need another globally installed module named `rimraf`. For linux users it's not an issue.

### Running the watch function

`Gulpfile.js` is taking care of the commands for watch, paths and settings. All you need is to run `$ gulp`.

### Compile Sass without npm

If you have `sass` command installed, you can run `sass --watch assets/sass/master.scss:assets/css/master.min.css --style compressed` to compile only the sass file. For JavaScript you will have to use gulp.

## Testing

With the DX Starter theme you also get front-end regression test tool. The configuration and tests are located in `tests/views/test.js`. To run the tests simply type `npm test` and the cleanup the test files type `npm run test-cleanup`.

Read more on how it works [in PhantomCSS's github page](https://github.com/Huddle/PhantomCSS)

## Note:

The theme is not 100% ready as there are still small changes to be made in the future. Some of the todos are renaming some of the scss files, better js compile/minification and imgming scripts. That is what's on the radar for now, most likley there will be more to be added/changed. If you have any ideas feel free to open an issue !
