'use strict'

import 'lazysizes'

import * as $ from 'pumpkin.js'
import objectFitImages from 'object-fit-images'
import { IdleQueue } from 'idlize/IdleQueue.mjs'
import Modal from './lib/modal'

const queue = new IdleQueue()

$.ready(() => {
  document.addEventListener('lazyloaded', e => {
    objectFitImages(e.target)
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
})
