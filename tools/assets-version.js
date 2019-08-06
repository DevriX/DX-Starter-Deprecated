/**
 * Currently this script will generate a new version
 * number for the theme's asset files. It writes in inc/theme-version.php
 */

// The two packages required to write in the theme-version.php file
var fs = require('fs');
var moment = require('moment');

// Generate version for theme-version.php for the assets
let someFile = './inc/theme-version.php';

fs.readFile(someFile, 'utf8', function (err,data) {
	if (err) {
		return console.log(err);
	}

	// The REGEX to find the assets version
	let versionRegex = /define\( 'DX_ASSETS_VERSION', '*(.*?)' \);/g;

	// Find the line where the version is at.
	let found = data.match(versionRegex);

	// This will get and increment the version of the assets file.
	// 39 must be replaced with automated find
	let verIndexOf = found[0].indexOf(', \'') + 3 + 9; // 3 for the ", '" bit and 9 for the date + dash
	currentVersion = parseInt(found[0].substring(verIndexOf, found[0].length - 4));
	currentVersion++;

	// Create the date format. Of course you can change that to anything you like
	// or even remove it so that you have only the version number and nothing else.
	let time = moment().format("YYYYMMDD");

	// Create the string that we will replace with the existing one.
	let themeVersionString = "define( 'DX_ASSETS_VERSION', '" + time + '-' + currentVersion + "' );";

	// Once again find the string to replace and set the new version
	let result = data.replace(versionRegex, themeVersionString);

	// End it all by writing in the file (or throw error :)
	fs.writeFile(someFile, result, 'utf8', function (err) {
		if (err) return console.log(err);
	});

	console.log("--------------------------------------------------------------")
	console.log("Assets version has been updated: \x1b[33m%s\x1b[0m", time + '-' + currentVersion);
	console.log("To update them again, make sure to run \x1b[33mgulp\x1b[0m again.");
	console.log("--------------------------------------------------------------\n")
});
