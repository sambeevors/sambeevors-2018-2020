---
extends: _layouts.post
title: Two quick issues with your website performance you can fix today
featured_image: /img/blog/web-perf-2-fixes.jpg
date: 2018-12-09
section: content
---

A lot of the time you desperately want to improve the performance of your site, but you just don't have the time or budget to do so. Here are a couple of quick things you might have missed. Fixing these takes no time at all and can have incredible results.

## You have render blocking scripts

Render blocking scripts are any scripts that stop your page being loaded as quickly as possible. Typically when an HTML page is parsed and a script is found, the page stops being loaded while it fetches and then executes the script it just found. This can add unnecessary load times and affect your _first meaningful paint_.

First Meaningful Paint is the time when page's primary content appeared on the screen. This is now Google’s primary metric for user-perceived loading experience.

To put it simply, people are impatient. Studies by Google show that [53% of mobile users abandon sites that take over 3 seconds to load](https://www.doubleclickbygoogle.com/articles/mobile-speed-matters/). That 3 second load time goal is going to be near-impossible to reach when you have Javascript files interrupting the page load.

The best way to address this issue is with the async and defer script attributes. Using an async attribute will download the file _while the HTML continues to parse_ and then pauses the HTML on execution. Defer will also download the file while the HTML parses, but it will also _wait until the parser has completed before executing_. Defer scripts will still execute in the order they appeared in the document too. There is a great article by [Growing With The Web](http://www.growingwiththeweb.com/2014/02/async-vs-defer-attributes.html) which goes into this in more detail.

## You are loading too many offscreen images

Offscreen images are any images that are not in view when the user first lands on the page. This includes images below the fold, as well as things like other slides in an image carousel. On long pages or ones that feature a big image gallery, you may find that loading all the images in on page load is having a pretty massive impact on your page load.

You might say, “But I _need_ all these images on my page”, and that’s fine, _you don’t need to remove any images from your site_ to improve its load time. You just don’t need them all yet. The most important thing a developer can do when working to improve their page speed is decide what should be on the page on the _initial_ load. There is no point loading all 20 images in your pretty image gallery when only one of them is going to visible until the user starts interacting with the page.

The solution? Lazy load! Lazy loading is essentially just loading content after the page has initialised. There are plenty of javascript plugins/snippets you can use to accomplish this, and the one you use is very dependant on your site, and what your requirements are. A lot of image gallery plugins actually support lazy loading images as a setting.
