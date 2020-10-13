const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ImageminPlugin = require("imagemin-webpack-plugin").default;
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const glob = require("glob");

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
    port: 9000,
    publicPath: "/",
    proxy: {
      "*": {
        target: "local.dxstarter.com",
        secure: false,
      },
      "/": {
        target: "local.dxstarter.com",
        secure: false,
      },
    },
  },
  plugins: [
    new BrowserSyncPlugin({
      proxy: "local.dxstarter.com",
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
  },
  plugins: [
    // Output the minified sass file
    new MiniCssExtractPlugin({
      filename: "[name].min.css",
    }),
  ],
};

module.exports = [configJS, configCSSImagesFonts];
