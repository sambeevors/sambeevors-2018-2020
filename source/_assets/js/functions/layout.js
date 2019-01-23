import * as $ from 'pumpkin.js'

import HeightGroup from '../lib/HeightGroup'

const layout = () => {
  ;['.js-post-title', '.js-post', '.js-nav-bar'].forEach(qs => {
    if ($.qs(qs)) {
      let group = new HeightGroup(qs)
      group.watchElements()
    }
  })
}

export default layout
