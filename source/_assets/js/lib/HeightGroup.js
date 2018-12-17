class HeightGroup {
  constructor (querySelector) {
    this.nodeList = document.querySelectorAll(querySelector)
    this.nodeHeights
    this.newHeight
  }

  watchElements () {
    window.addEventListener('resize', () => {
      this.matchHeights()
    })
    this.matchHeights()
  }

  matchHeights () {
    this.nodeHeights = []
    this.newHeight = null

    for (let i = 0; i < this.nodeList.length; i++) {
      this.nodeList[i].style.minHeight = 'auto'
      this.nodeHeights.push(this.nodeList[i].offsetHeight)
    }

    this.newHeight = Math.max.apply(null, this.nodeHeights)
    for (let i = 0; i < this.nodeList.length; i++) {
      this.nodeList[i].style.minHeight = `${this.newHeight}px`
    }
  }
}

export default HeightGroup
