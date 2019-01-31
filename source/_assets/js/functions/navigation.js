import * as $ from 'pumpkin.js'

const navigation = () => {
  const $burger = $.qs('.js-burger')
  const $nav = $.qs('.js-nav')

  if ($burger && $nav) {
    $burger.addEventListener('click', function(e) {
      e.preventDefault()
      $nav.classList.toggle('-active')
      $burger.classList.toggle('-active')
      document.body.classList.toggle('overflow-hidden')
    })

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && $nav.classList.contains('-active')) {
        $nav.classList.remove('-active')
        $burger.classList.remove('-active')
        document.body.classList.toggle('overflow-hidden')
      }
    })
  }
}

export default navigation
