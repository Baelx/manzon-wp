const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  entry: [
    path.resolve(__dirname, '/src/js/App.js'),
    path.resolve(__dirname, '/src/sass/main.scss')
],
  output: {
    path: path.resolve(__dirname, './dist/'),
    filename: '[name].js'
  },
  mode: 'development',
  plugins: [
    new MiniCssExtractPlugin({filename: "[name].css"})
  ],
  module: {
    rules: [
      {
        test: /\.m?js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      },
      {
        test: /\.(scss|css)$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader'
        ],
      },
    ]
  }
}
