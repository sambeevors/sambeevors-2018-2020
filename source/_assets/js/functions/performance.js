const performance = () => {
  if (typeof window.IntersectionObserver === 'undefined') {
    import(/* webpackChunkName: 'intersection-observer' */ 'intersection-observer').then(
      init
    )
  } else init()
}

const init = () => {
  import(/* webpackChunkName: 'quicklink' */ 'quicklink').then(
    ({ default: quicklink }) => {
      quicklink()
    }
  )
}

export default performance
