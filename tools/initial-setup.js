#!/usr/bin/env node
const replaceInFiles = require('replace-in-files');
const readline = require('readline').createInterface({
	input: process.stdin,
	output: process.stdout
})

let options = {
	files: './**',
	from: /dxstarter/g,
	to: 'dxstarter',
	optionsForFiles: {
		"ignore": [
			"./node_modules/**",
			"./tools/**"
		]
	}
};

readline.question(`How would you want to be your text domain called (dxstarter)? `, function (textDomain) {
	rename('dxstarter', textDomain, renameProject)

})

function renameProject() {
	readline.question(`How would you want to be your project called (DevriX Starter)? `, function (project) {
		rename('DevriX Starter', project, renamePackage)

	})
}

function renamePackage() {
	readline.question(`How would you want to be your package called (DevriX_Starter)? `, function (packageName) {
		rename('DevriX_Starter', packageName)
		readline.close()
	})
}

function rename(toRenameFrom, toRenameTo, callback) {
	options.from = new RegExp(toRenameFrom, "g")
	options.to = toRenameTo
	replaceInFiles(options).then(() => {
		if (callback) {
			callback()
		}
	}).catch(error => {
		console.error('Error occurred:', error);
	});
}