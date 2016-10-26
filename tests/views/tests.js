
var phantomcss = require('phantomcss');

// Config
// @TODO Move this to config file.
const DOMAIN = 'http://localhost/sandbox/theme-starter/';

phantomcss.init({

	// captureWaitEnabled defaults to true, setting to false will remove a small wait/delay on each
	// screenshot capture - useful when you don't need to worry about
	// animations and latency in your visual tests
    captureWaitEnabled: true,

	// libraryRoot is now optional unless you are using SlimerJS where
	// you will need to set it to the correct path. It must point to
	// your phantomcss folder. If you are using NPM, this will probably
	// be './node_modules/phantomcss'.
    // libraryRoot: './modules/PhantomCSS',

    screenshotRoot: './tests/views/screenshots',

	// By default, failure images are put in the './failures' folder. 
	// If failedComparisonsRoot is set to false a separate folder will 
	// not be created but failure images can still be found alongside 
	// the original and new images.
    failedComparisonsRoot: './tests/views/failures',

    // Remove results directory tree after run.  Use in conjunction 
    // with failedComparisonsRoot to see failed comparisons.
    cleanupComparisonImages: true,

	// You might want to keep master/baseline images in a completely 
	// different folder to the diffs/failures.  Useful when working 
	// with version control systems. By default this resolves to the 
	// screenshotRoot folder.
    comparisonResultRoot: './tests/views/results',

	// Don't add count number to images. If set to false, a filename is 
	// required when capturing screenshots.
    addIteratorToImage: false,

	// Don't add label to generated failure image
    addLabelToFailedImage: false,

	// Mismatch tolerance defaults to  0.05%. Increasing this value 
	// will decrease test coverage
    mismatchTolerance: 0.05,

    // Prefix the screenshot number to the filename, instead of suffixing it
    prefixCount: true,

    // Output styles for image failure outputs genrated by Resemble.js
	outputSettings: {
		errorColor: {
			red: 255,
			green: 255,
			blue: 0
		},
		errorType: 'movement',
		transparency: 0.3
	},

	// Rebase is useful when you want to create new baseline 
	// images without manually deleting the files
	// casperjs demo/test.js --rebase
	rebase: casper.cli.get("rebase")
});

// Turn off CSS transitions and jQuery animations
// phantomcss.turnOffAnimations();

// Testing all homepage elements.
casper.test.begin('Homepage', function(test) {
	phantomcss.init({
		rebase: casper.cli.get('rebase')
	});

	// where will we test. Fill in the '' to test different pages
	casper.start(DOMAIN + '');
	casper.echo('> Testing on page: ' + DOMAIN, 'WARNING');

	// On what size shaw we make the tests.
	casper.viewport(1366, 768); // 35%	world-wide usage

	// begin testing:
	// ----------------------------------------------------
	casper.then(function() {
		// Screenshot the whole body element and save in file 'Full Homepage Screenshot'
		// phantomcss.screenshot('body', 'Full Homepage Screenshot');
		
		// Main site components
		phantomcss.screenshot('.site-header', 'site-header');
		phantomcss.screenshot('.site-footer', 'site-footer');
	});

	// end testing and compare results
	// ----------------------------------------------------
	casper.then(function now_check_the_screenshots() {
		phantomcss.compareAll();
	});

	casper.run(function() {
		console.log('\nTest results:');
		casper.test.done();
	});
});
