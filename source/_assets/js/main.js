'use strict'

import './polyfills/closest.js'
import HeightGroup from './helpers/heightGroup.js'

const site = (() => {
  const setupPage = (cb) => {
    // Page set up code goes here

    // Example height group usage
    const contentElements = new HeightGroup('.js-match-content')
    contentElements.watchElements()

    if (typeof cb === 'function') cb()
    else throw new Error('Callback must be a function.')
  }

  const setupEvents = () => {
    // Page event code goes here

    console.log('Page has been set up.')
  }

  return {
    init: () => {
      const setup = () => {
        setupPage(() => {
          setupEvents()
        })
      }

      if (document.readyState !== 'loading') setup()
      else document.addEventListener('DOMContentLoaded', setup)
    }
  }
})()

site.init()
