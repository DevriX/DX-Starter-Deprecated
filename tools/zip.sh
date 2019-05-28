#!/bin/bash

zip_name=$1

if [[ -n "$zip_name" ]]; then
    echo "Zipping your theme without node_modules ..."
    zip -r "$zip_name" ./ -x *.git* ./node_modules/**\* ./.sass-cache/**\* ./assets/sass/**\* ./README.md ./ziptheme.sh ./npm-debug.log ./tests ./changelog.txt ./gulpfile.js ./package.json "*.DS_Store" "*.editorconfig" "*.gitignore" "*.sass-cache/" "*.node_modules/" "tests/*" "assets/src/" "zip.sh" ".eslintrc.json" ".editorconfig" ".sass-lint.yml"

    echo "Zip successfull."
else
    echo "ERROR: ZIP file name not provided..."
fi
