const path = require('path')

var config = {
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules)/,
        loader: 'babel-loader',
        query: {
          cacheDirectory: './webpack_cache/'
        }
      },
      {
        test: /\.svg$/,
        loader: 'raw-loader'
      }
    ]
  },
  plugins: [],
  output: {
    filename: '[name].js',
    publicPath: '/js/'
  }
}

module.exports = config
