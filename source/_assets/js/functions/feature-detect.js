import Promise from 'promise-polyfill'

const featureDetect = () => {
  if (
    typeof window.Promise !== 'undefined' &&
    window.Promise.toString().indexOf('[native code]') !== -1
  ) {
    window.Promise = Promise
  }

  if (
    navigator.userAgent.indexOf('Safari') !== -1 &&
    navigator.userAgent.indexOf('Mac') !== -1 &&
    navigator.userAgent.indexOf('Chrome') === -1
  ) {
    document.body.classList.add('is-safari')
  }
}

export default featureDetect
