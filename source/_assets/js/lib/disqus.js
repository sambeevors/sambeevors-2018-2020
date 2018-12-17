const disqus = () => {
  const d = document
  const s = d.createElement('script')

  s.src = 'https://sambeevors.disqus.com/embed.js'

  s.setAttribute('data-timestamp', +new Date())
  ;(d.head || d.body).appendChild(s)
}

export default disqus
