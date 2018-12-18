const isSafari = () => {
  if (
    navigator.userAgent.indexOf('Safari') !== -1 &&
    navigator.userAgent.indexOf('Mac') !== -1 &&
    navigator.userAgent.indexOf('Chrome') === -1
  ) {
    return true
  }
  return false
}

export default isSafari
