import isSafari from '../lib/isSafari'

const featureDetect = () => {
  if (isSafari()) document.body.classList.add('is-safari')
}

export default featureDetect
