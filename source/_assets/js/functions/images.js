import 'lazysizes'

const images = () => {
  document.addEventListener('lazyloaded', e => {
    import(/* webpackChunkName: 'object-fit-images' */ 'object-fit-images').then(
      ({ default: objectFitImages }) => {
        objectFitImages(e.target)
      }
    )

    import(/* webpackChunkName: 'medium-zoom' */ 'medium-zoom').then(
      ({ default: mediumZoom }) => {
        mediumZoom([
          ...document.querySelectorAll('[data-zoomable]'),
          ...document.querySelectorAll('.markdown-body img')
        ])
      }
    )
  })
}

export default images
