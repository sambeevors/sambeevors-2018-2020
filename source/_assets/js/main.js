'use strict'

import * as $ from 'pumpkin.js'

import featureDetect from './functions/feature-detect'
import layout from './functions/layout'
import navigation from './functions/navigation'
import images from './functions/images'
import modals from './functions/modals'
import comments from './functions/comments'
import performance from './functions/performance'

$.ready(() => {
  featureDetect()
  layout()
  navigation()
  images()
  modals()
  comments()
  performance()
})
