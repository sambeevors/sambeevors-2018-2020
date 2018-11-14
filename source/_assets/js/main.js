'use strict'

import 'lazysizes'

import * as $ from 'pumpkin.js'
import objectFitImages from 'object-fit-images'
import HeightGroup from './helpers/heightGroup'

$.ready(() => {
  objectFitImages()

  const header = new HeightGroup('.js-header-spacer')
  header.watchElements()
})
