'use strict'

import * as $ from 'pumpkin.js'

import images from './functions/images'
import featureDetect from './functions/feature-detect'
import layout from './functions/layout'
import navigation from './functions/navigation'
import modals from './functions/modals'
import performance from './functions/performance'

$.ready(() => {
  featureDetect()
  layout()
  navigation()
  images()
  modals()
  performance()
})
