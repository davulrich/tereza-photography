const path = require("path");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");

module.exports = {
  entry: ["./assets/src/index.js"],

  output: {
    path: path.resolve(__dirname, "assets/dist/js"),
    filename: "bundle.js",
  },
  devtool: "source-map",

  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: "babel-loader",
      },
      {
        test: /\.scss$/,
        exclude: /node_modules/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          {
            loader: "css-loader",
            options: {
              sourceMap: true,
            },
          },
          {
            loader: "postcss-loader",
          },
          {
            loader: "resolve-url-loader",
            options: {
              sourceMap: true,
            },
          },
          {
            loader: "sass-loader",
            options: {
              sourceMap: true,
            },
          },
        ],
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/,
        exclude: /node_modules/,
        loader: "file-loader",
        options: {
          name: "[name].[ext]",
          publicPath: "../fonts",
          outputPath: "../fonts",
        },
      },
      {
        test: /\.(jpg|jpeg|png|gif|svg)$/,
        loader: "file-loader",
        options: {
          name: "[name].[ext]",
          publicPath: "../img",
          outputPath: "../img",
        },
      },
    ],
  },

  plugins: [
    new BrowserSyncPlugin({
      files: ["**/*.php"],
      proxy: "tereza.localhost",
      host: "localhost",
      open: false,
    }),
    new MiniCssExtractPlugin({
      filename: "../css/style.css",
    }),
  ],

  optimization: {
    minimize: false,
    minimizer: [
      new CssMinimizerPlugin({
        sourceMap: true,
      }),
    ],
  },

  watchOptions: {
    ignored: /node_modules/,
  },
};
