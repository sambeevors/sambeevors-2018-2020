'use strict'

import 'lazysizes'

import * as $ from 'pumpkin.js'
import objectFitImages from 'object-fit-images'
import quicklink from 'quicklink'
import { IdleQueue } from 'idlize/IdleQueue.mjs'
import mediumZoom from 'medium-zoom'
import Modal from './lib/modal'
import HeightGroup from './lib/HeightGroup'
import disqus from './lib/disqus'

const queue = new IdleQueue()

$.ready(() => {
  // Object fit polyfill
  document.addEventListener('lazyloaded', e => {
    objectFitImages(e.target)
  })

  // Blog cards match height
  ;['.js-post-title', '.js-post'].forEach(qs => {
    if ($.qs(qs)) {
      let group = new HeightGroup(qs)
      group.watchElements()
    }
  })

  // Subscribe modal
  let $subscribeModal
  const $subscribeBtn = $.qs('.js-subscribe')

  if ($subscribeBtn) {
    queue.pushTask(() => {
      $subscribeModal = new Modal({
        querySelector: '.js-modal-container'
      })
      $subscribeModal.create()
    })

    $.on('click', $subscribeBtn, e => {
      e.preventDefault()
      queue.pushTask(() => {
        $subscribeModal.openModal()
      })
    })
  }

  // Disqus comments
  if ($.qs('#disqus_thread')) queue.pushTask(disqus())

  // Google QuickLink
  quicklink()

  // Medium-like zooming
  mediumZoom([
    ...document.querySelectorAll('[data-zoomable]'),
    ...document.querySelectorAll('.markdown-body img')
  ])
})
