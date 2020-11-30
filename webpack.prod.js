const webpack = require("webpack");
const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ImageminPlugin = require("imagemin-webpack-plugin").default;
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const glob = require("glob");
const ASSET_PATH = process.env.ASSET_PATH || "/";

const config = require('./webpack.local.js');

const configJS = {
  name: "JavaScript",
  mode: "development",
  entry: "./assets/src/scripts/index.js",
  target: "web",
  watch: true,
  module: {
    rules: [
      {
        test: /\.(js)$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"],
          },
        },
      },
    ],
  },
  output: {
    filename: "[name].min.js",
    path: path.resolve(__dirname, "assets/dist/scripts/"),
  },
  devtool: "source-map",
  devServer: {
    historyApiFallback: true,
    port: config.port,
    publicPath: "/",
    proxy: {
      "*": {
        target: config.proxy,
        secure: false,
      },
      "/": {
        target: config.proxy,
        secure: false,
      },
    },
  },
  plugins: [
    new BrowserSyncPlugin({
      proxy: config.proxy,
      files: ["**/*"],
      reloadDelay: 0,
    }),
  ],
};

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
      {
        test: /\.(ttf|eot|woff|woff2|svg)$/,
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
    ],
  },
  output: {
    filename: "[name].js",
    path: path.resolve(__dirname, "./assets/dist/css"),
    publicPath: ASSET_PATH,
  },
  plugins: [
    // Output the minified sass file
    new MiniCssExtractPlugin({
      filename: "[name].min.css",
    }),
    // This makes it possible for us to safely use env vars on our code
    new webpack.DefinePlugin({
      "process.env.ASSET_PATH": JSON.stringify(ASSET_PATH),
    }),
  ],
};

module.exports = [configJS, configCSSImagesFonts];
