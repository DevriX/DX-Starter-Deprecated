const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ImageminPlugin = require("imagemin-webpack-plugin").default;
const glob = require("glob");

const configStyles = {
  name: "Styling",
  mode: "development",
  entry: {
    master: "./assets/src/sass/master.scss",
  },
  module: {
    rules: [
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
    new MiniCssExtractPlugin({
      filename: "[name].min.css",
    }),
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

module.exports = [configStyles];
