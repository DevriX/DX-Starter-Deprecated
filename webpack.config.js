const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ImageminPlugin = require("imagemin-webpack-plugin").default;
const glob = require("glob");
const CopyPlugin = require("copy-webpack-plugin");

const configCSSImagesFonts = {
  name: "Styling",
  mode: "development",
  entry: {
    master: "./assets/src/sass/master.scss",
  },
  module: {
    rules: [
      {
        test: /\.(woff(2)?|ttf|eot)(\?v=\d+\.\d+\.\d+)?$/,
        use: [
          {
            loader: "file-loader",
            options: {
              name: "[name].[ext]",
              outputPath: "../fonts",
            },
          },
        ],
      },
      {
        test: /\.s[ac]ss$/i,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: "css-loader",
            options: {
              sourceMap: true,
            },
          },
          {
            loader: "sass-loader",
            options: {
              implementation: require("sass"),
              sourceMap: true,
              sassOptions: {
                outputStyle: "compressed",
              },
            },
          },
        ],
      },
    ],
  },
  output: {
    filename: "[name].js",
    path: path.resolve(__dirname, "./assets/dist/css"),
  },
  plugins: [
	// A very straightforward "move the fonts" one:
    new CopyPlugin({
      patterns: [
        {
		  from: "assets/src/fonts/**/*",
		  to: "../fonts/[name].[ext]"
        },
      ],
	}),
	
	// Output the minified sass file
    new MiniCssExtractPlugin({
      filename: "[name].min.css",
	}),
	
	// Images minification and move them to a folder
    new ImageminPlugin({
      externalImages: {
        context: "assets", // Important! This tells the plugin where to "base" the paths at
        sources: glob.sync("assets/src/images/**/*"),
        destination: "assets/dist/images",
        fileName: "[name].[ext]", // (filePath) => filePath.replace('jpg', 'webp') is also possible
      },
    }),
  ],
};

module.exports = [configCSSImagesFonts];
