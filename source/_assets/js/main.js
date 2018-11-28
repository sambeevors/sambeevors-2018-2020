'use strict'

import 'lazysizes'

import * as $ from 'pumpkin.js'
import objectFitImages from 'object-fit-images'
import HeightGroup from './helpers/heightGroup'

$.ready(() => {
  objectFitImages()

  const header = new HeightGroup('.js-header-spacer')
  header.watchElements()

  const subscribeBtn = $.qs('.js-subscribe')
  const modalContainer = $.qs('.js-modal-container')

  const toggleModal = () => {
    modalContainer.classList.toggle('pointer-events-none')
    modalContainer.classList.toggle('opacity-0')
  }

  $.on('click', subscribeBtn, e => {
    e.preventDefault()
    toggleModal()
  })

  $.on('click', modalContainer, '.js-close', e => {
    e.preventDefault()
    toggleModal()
  })

  $.on('click', modalContainer, e => {
    e.preventDefault()
    if (e.target === modalContainer) toggleModal()
  })
})
