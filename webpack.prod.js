const webpack = require('webpack')
const nameAllModulesPlugin = require('name-all-modules-plugin')
const merge = require('webpack-merge')
const common = require('./webpack.common.js')

let config = merge(common, {
  mode: 'production',
  devtool: 'source-map',
  plugins: [
    // start of plugins to fix chunk hashes
    // see: https://medium.com/webpack/predictable-long-term-caching-with-webpack-d3eee1d3fa31
    new webpack.NamedModulesPlugin(),
    new webpack.NamedChunksPlugin(chunk => {
      if (chunk.name) {
        return chunk.name
      }
      return chunk.modules
        .map(m => path.relative(m.context, m.request))
        .join('_')
    }),
    new nameAllModulesPlugin(),

    // NODE_ENV is a system environment variable that Node.js exposes into running scripts.
    // It is used by convention to determine dev-vs-prod behavior by server tools, build scripts, and client-side libraries.
    // https://webpack.js.org/guides/production/#specify-the-environment
    new webpack.DefinePlugin({
      'process.env': {
        NODE_ENV: JSON.stringify('production')
      }
    }),

    // https://webpack.js.org/plugins/loader-options-plugin/
    // Until a loader has been updated to depend upon options being passed directly to them, the LoaderOptionsPlugin exists to bridge the gap.
    // You can configure global loader options with this plugin and all loaders will receive these options.
    new webpack.LoaderOptionsPlugin({
      minimize: true,
      debug: false
    })
  ]
})

module.exports = config
