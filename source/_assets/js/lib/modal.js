import * as $ from 'pumpkin.js'

class Modal {
  constructor(markup, classList) {
    this.hasMarkup = markup && typeof markup === 'object'
    if (this.hasMarkup) {
      this.modal = $.qs(markup.querySelector || 'form')
    } else {
      this.modal = document.createElement('div')
      this.modal.style = 'transition: opacity .3s ease-in-out'
      this.modal.classList =
        classList ||
        'flex justify-center fixed pin bg-black-70 z-50 items-center opacity-0 pointer-events-none js-modal-container'
      this.modal.innerHTML = markup
    }
  }

  create(cb) {
    if (!this.hasMarkup) document.body.appendChild(this.modal)

    $.on('click', this.modal, e => {
      if (e.target === this.modal) {
        e.preventDefault()
        this.toggleModal()
      }
    })

    $.on('click', this.modal, '.js-close', e => {
      e.preventDefault()
      this.closeModal()
    })

    $.on('keydown', document, e => {
      if (
        !this.modal.classList.contains('pointer-events-none') &&
        !this.modal.classList.contains('opacity-0')
      ) {
        if (e.keyCode === 27) this.closeModal()
      }
    })

    if (cb) cb()
  }

  destroy(cb) {
    document.removeChild(this.modal)

    if (cb) cb()
  }

  toggleModal() {
    this.modal.classList.toggle('pointer-events-none')
    this.modal.classList.toggle('opacity-0')
  }

  openModal() {
    this.modal.classList.remove('pointer-events-none')
    this.modal.classList.remove('opacity-0')
  }

  closeModal() {
    this.modal.classList.add('pointer-events-none')
    this.modal.classList.add('opacity-0')
  }
}

export default Modal
