import quicklink from 'quicklink'

const performance = () => {
  if (typeof window.IntersectionObserver === 'undefined') {
    import(/* webpackChunkName: 'intersection-observer' */ 'intersection-observer').then(
      () => {
        quicklink()
      }
    )
  }
}

export default performance
