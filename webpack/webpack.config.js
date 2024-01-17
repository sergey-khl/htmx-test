const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const glob = require('glob');


module.exports = {
  entry: './src/js/alpine.js',
  watch: true,
  watchOptions: {
    aggregateTimeout: 200,
    poll: 1000,
  },
  output: {
    filename: 'bundle.js',
    path: __dirname + '/dist',
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
        },
      },
    ],
  },
  // plugins: [
  //   ...glob.sync('./src/views/*.html').map((htmlFile) => {
  //     return new HtmlWebpackPlugin({
  //       template: htmlFile,
  //       filename: path.basename(htmlFile),
  //       chunks: [path.basename(htmlFile, '.html')],
  //     });
  //   }),
  // ],
  devServer: {
    contentBase: './dist',
    port: 3000,
  },
};
