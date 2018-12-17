'use strict'

import 'lazysizes'

import * as $ from 'pumpkin.js'
import objectFitImages from 'object-fit-images'
import quicklink from 'quicklink'
import { IdleQueue } from 'idlize/IdleQueue.mjs'
import mediumZoom from 'medium-zoom'
import Modal from './lib/modal'
import HeightGroup from './lib/HeightGroup'

const queue = new IdleQueue()

$.ready(() => {
  document.addEventListener('lazyloaded', e => {
    objectFitImages(e.target)
  })
  ;['.js-post-title', '.js-post'].forEach(qs => {
    if ($.qs(qs)) {
      let group = new HeightGroup(qs)
      group.watchElements()
    }
  })

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

  quicklink()
  mediumZoom([
    ...document.querySelectorAll('[data-zoomable]'),
    ...document.querySelectorAll('.markdown-body img')
  ])
})
