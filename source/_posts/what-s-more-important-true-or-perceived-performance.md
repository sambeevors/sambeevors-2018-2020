---
extends: _layouts.post
title: What’s more important, true or perceived performance?
featured_image: /img/blog/perf-tips.jpg
date: 2018-12-09
section: content
---

There are an abundance of terms in web performance these days. Time To Start Render, Time To Interact, First Meaningful Paint, DOM Content Loaded, the list goes on. But what really matters when it comes to having a fast experience? What do these terms even mean? 

As [web pages grow in size year on year](https://www.keycdn.com/support/the-growth-of-web-page-size), the users' experience is dwindling. Sure, people’s internet speeds are getting faster, but not everyone's, and what about on choppy connections? It feels like developers are increasingly forgetting about the users who already have the toughest time on the web.

When we address this issue, there are a few options we can take; do we cut back on the beautiful images? Do we stop using the wonderful modern frameworks to save on bytes? Do we drop certain features to avoid depending on big polyfills? Or do we take the other route, do we just make it *feel* as though the experience is faster by using things like spinners or loaders, deferring scripts to get *something* out to the user quickly, even if it’s not quite the full experience… yet. The answer, as you may have predicted, is not a simple one, and well - it depends.

A lot of times, we can improve the true performance of a site without impacting user experience. Some things may include critical CSS, deferring off-screen images, making use of next-gen image formats, and ensuring assets are minified. The obvious benefit to this is that these are fairly simple quick-fixes, which boost your site’s performance at no detriment to the user. The downside is these fixes are often either already in place, or only add a very minimal improvement.

This is where perceived performance comes in to play. It may feel like there’s not much we can do about a big React application which relies on some third-party API’s to run, but that’s not necessarily true. There’s a fantastic talk by Andrew Clark on [React suspense](https://www.youtube.com/watch?v=z-6JC0_cOns), and how we can improve perceived performance by loading the shell of the app both quickly and early, and show an indication that there is content loading which we can slot in as soon as it’s ready. This stops getting a big white screen while our entire app loads. This doesn’t have to be React specifically, however, there are many ways to achieve a similar result without using any framework at all. There’s a great piece by Philip Walton titled [Idle Until Urgent](https://philipwalton.com/articles/idle-until-urgent/), which I would highly recommend everyone reads, that offers a fantastic solution for such a problem, which leaves the implementation very much up to the developer.

So should you be nailing your initial load, or hammering down on getting an initial paint as quickly as possible? My answer is simple, it depends. It is part of the role of the developer to make such a decision, based on the content of the app and its specific goals, and utilize both methods in such a way that makes the most sense for the user. If you can get the full page quickly, that’s a great target to aim for. If it’s more reliant on third-party API’s or big JS files, maybe you want to push more towards a perceived performance, to keep users from abandoning your app.
