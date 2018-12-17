---
extends: _layouts.post
title: 'Quick Tip: Use lighthouse (and PageSpeed insights) in incognito mode'
featured_image: /img/blog/lighthouse.jpg
date: 2018-12-17
section: content
tags: ['web perforamnce', 'testing']
---

I love [Lighthouse](https://developers.google.com/web/tools/lighthouse/). It's a priceless tool in keeping an eye on your websites performance, SEO, and best practices and I have used it ever since it shipped in Chrome. Recently, Google's [PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/) has also started using Lighthouse to record its metrics, which is also a massively popular tool used by developers and SEO analysts alike.

I received a message the other day, telling me that one of the websites I work on had a poor performance score. Concerned, I fired up my browser, ran a lighthouse audit, and awaited the results... _92/100_, pretty good if you ask me. So why was it flagged as poor? I ran a few other tests using different services, confirmed the performance was up to scratch and then asked the question, "Where did you get that metric from?"

> "PageSpeed Insights"

What!? We compared results, and sure enough, they didn't match up. But how could that be? I ran a lighthouse test on both machines, with the same settings, with a single tab open, and sure enough, there was a huge discrepancy. _The website took 3 times as long to load_, with no obvious explanation. After some playing about, I decided to try the test again, but in incognito mode. The tests both showed the exact same results. It appears that **browser extensions interfere with the tests, and skew the results of the audit**. The same happens on the PageSpeed Insights website, which implies the test runs client-side.

Here is a test running on the [React website](https://reactjs.org/) in a regular Chrome window:

![Lighthouse audit test in Chrome](/img/blog/lighthouse-regular-chrome.png)

And here is one in incognito mode:

![Lighthouse audit test in Chrome incognito mode](/img/blog/lighthouse-incog-chrome.png)

As you can see, there's a massive hit to the performance metrics, and results in unreliable and inconsistent results. My recommendation, always run audits in incognito mode!
