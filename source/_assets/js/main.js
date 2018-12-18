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

  const $burger = $.qs('.js-burger')
  const $nav = $.qs('.js-nav')
  if ($burger) {
    $burger.addEventListener('click', function (e) {
      e.preventDefault()
      $nav.classList.toggle('-active')
      $burger.classList.toggle('-active')
    })
  }

  let $subscribeModal
  const $subscribeBtn = $.qsa('.js-subscribe')

  if ($subscribeBtn.length) {
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
      if ($nav) $nav.classList.remove('-active')
      if ($burger) $burger.classList.remove('-active')
    })
  }

  const $navBar = new HeightGroup('.js-nav-bar')
  $navBar.watchElements()

  quicklink()
  mediumZoom([
    ...document.querySelectorAll('[data-zoomable]'),
    ...document.querySelectorAll('.markdown-body img')
  ])
})
