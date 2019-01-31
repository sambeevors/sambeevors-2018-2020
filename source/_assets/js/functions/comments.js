import * as $ from 'pumpkin.js'

const comments = () => {
  const disqusQS = '.js-disqus'
  if ($.qs(disqusQS)) {
    import(/* webpackChunkName: 'disqus' */ '../lib/disqus').then(() => {
      disqusLoader(disqusQS, {
        scriptUrl: 'https://sambeevors.disqus.com/embed.js'
      })
    })
  }
}

export default comments
