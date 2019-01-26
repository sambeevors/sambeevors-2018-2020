import * as $ from 'pumpkin.js'
import { IdleQueue } from 'idlize/IdleQueue.mjs'

import Modal from '../lib/modal'

const modals = () => {
  const queue = new IdleQueue()

  let $subscribeModal
  const $subscribeBtn = $.qsa('.js-subscribe')
  const $burger = $.qs('.js-burger')
  const $nav = $.qs('.js-nav')

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
        if ($nav) $nav.classList.remove('-active')
        if ($burger) $burger.classList.remove('-active')
      })
    })
  }
}

export default modals
