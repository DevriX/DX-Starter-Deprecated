const readline = require('readline');
const path = require('path');
const replaceInFiles = require('replace-in-file');

function generateTheme() {
    //default values of the theme
    let fullName = "DevriX Starter";
    let shortName = "DX-Starter";
    let textDomain = "dxstarter";
    let packageName = "DevriX_Starter";

    const rl = readline.createInterface({
        input: process.stdin,
        output: process.stdout
    });

    let recursiveAsyncReadLine = function () { 
        //textdomain field recursive validation
        rl.question('Please enter textDomain (dxstarter) ', function (textDomainInput) {
            const pattern = /^[a-z]+$/
            if (!textDomainInput.match(pattern)) {
                console.log("Invalid textDomain! The textDomain should be only lower case letters")
                recursiveAsyncReadLine();
            } else {
                //user input
                rl.question("Please enter theme fullName (DevriX Starter) ", function (fullNameInput) {
                    rl.question("Please enter theme shortName (DX-Starter) ", function (shortNameInput) {
                        rl.question("Please enter packageName (DevriX_Starter) ", function (packageNameInput) {
                            if (fullNameInput !== "") {
                                fullName = fullNameInput
                            }
                            if (shortNameInput !== "") {
                                shortName = shortNameInput
                            }
                            if (textDomainInput !== "") {
                                textDomain = textDomainInput
                            }
                            if (packageNameInput !== "") {
                                packageName = packageNameInput
                            }
                            rl.close();
                        });
                    });
                });
            }
        });
    };

    rl.on("close", function () {
        //search and replace options
        const options = {
            //path to the folders
            files: [
                path.resolve('./*'),
                path.resolve('./assets/dist/css/*'),
                path.resolve('./assets/src/sass/base/*'),
                path.resolve('./inc/*'),
                path.resolve('./template-parts/*'),
                path.resolve('./templates/*'),
            ],
            
            //search expressions
            from: [/DevriX Starter/g, /DX-Starter/g, /dxstarter/g, /DevriX_Starter/g],
            to: [fullName, shortName, textDomain, packageName],

            optionsForFiles: {
                "ignore": [
                    "/node_modules/"
                ]
            }

        };

        //calling the replace function
        replaceInFiles(options).then(results => {
            console.log("Remember to add author name and description");
            console.log("Generated")
            console.log("This script is doing search and replace. Be careful when running second time.")
        }).catch(error => {
            console.log("Errors occured:", error)
        })
    });
    recursiveAsyncReadLine();
}
generateTheme()

