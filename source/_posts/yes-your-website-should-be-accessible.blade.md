---
extends: _layouts.post
title: 'Yes, your website should be accessible'
featured_image: /img/blog/blinds.jpg
date: 2018-12-21
section: content
tags: ['accessibility', 'legal']
---

Accessibility is something often disregarded in modern web development, and it's frankly worrysome. According to the WHO, [188.5 million people have mild vision impairment, 217 million have moderate to severe vision impairment, and 36 million people are blind](https://www.who.int/en/news-room/fact-sheets/detail/blindness-and-visual-impairment). Of course, accessibility is by no means exclusive to the visually impaired, but that statistic alone should be enough to keep pages up to scratch, so why aren't they?

The answer is most likely budget, as if people suffering haven't paid enough already. Project budgets often mean things less noticable could be dropped to save time / money such as properly describing the page to a screen reader. What many companies fail to realise is from a financial point of view, shutting the door to these millions of people is costing them, often far more than it would take to get their services to an acceptable standard.

Besides the ethical and commercial benefits to accessibility for disabled users, there are also the law. If a website doesn’t meet a certain standard, you could be sued for discrimination.

The Equality Act 2010 (EQA) which came into force in the UK in October 2010, replacing the Disability Discrimination Act 1995 (DDA), was introduced with the intention of dealing with the issue of disability discrimination.

The EQA was intended to bring further clarity to the previous discrimination legislation contained in the DDA, which was passed when the internet was still young, and nobody really knew the speed at which it would grow. While the DDA did not mention the internet specifically, it did include "access to and use of information services" amongst the examples of services which had to be accessible to people with disabilities, and while the EQA does not expressly refer to websites, the consensus has since been that the reference to the "provision of a service" applies to commercial web services as much as to traditional services.

While the intention of the EQA is to be as clear as possible, to ensure that there is no ambiguity in interpretation, the Equality and Human Rights Commission has published a Statutory Code of Practice for "Services, public functions and associations" under the EQA.

The code, which came into force on 6 April 2011, provides authoritative advice on those provisions of the EQA relevant to service providers. The code explicitly states that websites are included under the ambit of the EQA for the provision of services:

> "Websites provide access to services and goods, and may in themselves constitute a service, for example, where they are delivering information or entertainment to the public."

The EQA imposes a duty on service providers to make "reasonable adjustments" to enable disabled persons to access their services. With regard to services relating to the provision of information, Section 20(6) EQA says:

> "...the steps which it is reasonable for [an information service provider] to have to take include steps for ensuring that in the circumstances concerned the information is provided in an accessible format."

The code notes that the "the duty to make reasonable adjustments requires service providers to take positive steps to ensure that disabled people can access services. This goes beyond simply avoiding discrimination. It requires service providers to anticipate the needs of potential disabled customers for reasonable adjustments." Furthermore, the code gives a practical example of the implications of failing to make reasonable adjustments:

> "A provider of legal services establishes a website to enable the public to access its services more easily. However, the website has all of its text embedded within graphics. Although it did not intend to discriminate indirectly against those with a visual impairment, this practice by the provider places those with a visual impairment at a particular disadvantage because they cannot change the font size or apply text-to-speech recognition software. They therefore cannot access the website. As well as giving rise to an obligation to make a reasonable adjustment to their website, their practice will be indirect disability discrimination unless they can justify it."

Therefore, the duty on an organisation with a website that is not accessible to the disabled is to take "reasonable" steps to make that website accessible. In considering what constitutes a reasonable adjustment, the code suggests that factors which might be taken into account include: the service provider’s financial and other resources; the amount of resources already spent on making adjustments; and the extent of any disruption which taking the steps would cause the service provider.

Put simply, a large company will struggle to justify any failure to make its website accessible, while a small business or a charity may have a better defence, if it can show that it cannot afford, or does not have the resources necessary for the development work.

Like most things, particularly in web development, you can work on them intensely for weeks to get everything just perfect. If you have the time / budget to do that, then great, but let's be realistic. Here is a list of minimum accessbility guidelines, composed by yours-truly, as well as a list of best practises, should you have time:

## Minimum Accessibility List

- You should be able to tab through your site
- Any interactive elements (carousels with keyboard controls) should be focusable (`tabindex="0"`)
- All images should have an alt tag (even if it’s content is empty)
- All controls should have a label
- Custom controls should have a role attribute
- Custom controls should properly convey their state
- The flow of DOM elements should make sense if you use CSS to reorder content
- Heading hierarchy (`h1-h6`) should be used properly
- No more than a single h1 on a page
- No jumps down hierarchy (eg. `h1` to `h3`)
- Colour contrasts should be WCAG AA compliant
- Focus styling should not be removed, unless it is for mouse interaction exclusively

## Additional Accessibility Best Practises

- Keyboard functionality / shortcuts should be implemented wherever possible / logical
- Toggle the ability to focus content based on its visibility (eg expanding navigation)
- SVGs and other non-image tag icons should have a label visible to a screen reader (Maybe use title, as it offers a hover for those who can’t determine the message of the icon)
- Interactive elements like links and buttons should indicate their purpose and state, ideally every interactive button should have a hover state
- Use landmark elements and roles so users can bypass repetitive content
- Use `aria-describedby` in forms on information related to specific fields (eg. "Password must contain a special character")
- Use `aria-live` for updates and notification boxes so screen reader users will automatically be read out updates without having to focus them
