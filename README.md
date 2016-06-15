# Annoy bad actors with a fake, infinite web site!

Yes, this is a dual-use technology. We're all adults here, aren't we?

## Features

* Delays a few seconds every time it's invoked.
* Give a random "google-site-verification" code.
* When called with `.html` URL suffix produces HTML. `gif`, `jpeg`, 'png' URL suffixes
  produce random images of the appropriate image format.
* When retrieved as `robots.txt`, allows all User Agents for `/`, `/porn`, `/private`
  and a randomly-named URI. If you use `bork.php`, don't be surprised at the rubbish
  that shows up in your `access_log` file.
* Produces random HTML, complete with "content" that includes Latin, B-list celebrities,
  condiments, and underwear teminology.
* Produces random streams of binary bits for `.torrent`, `.mp3`, `.gz` URL suffixes.

## Prerequisites

* Apache httpd
* mod_php
* mod_rewrite

## mod_rewrite Configuration

One you have Apache, `mod_php` and `mod_rewrite` installed and working (which I grant
can be difficult), you need to configure `mod_rewrite` to redirect incoming
HTTP requests from notorious bad actors to `bork.php`.

    RewriteCond %{HTTP_USER_AGENT} SomeUglyBot
    RewriteRule  ^.*(\?.*)*$ /bork.php$1 [L]
    RewriteCond %{HTTP_REFERER} ^http://..*/bork.php
    RewriteRule  ^.*(\?.*)*$ /bork.php$1 [L]

The last two lines allow you to try out `bork.php` yourself with a browser.

## Effects

The question becomes what does using `bork.php` do to a bad actor
like an SEO search engine?

First, here's a record of the total number of HTTP requests made of my
web site, [http://stratigery.com](http://stratigery.com) since 2009-02-11.

![total daily hits](https://raw.githubusercontent.com/bediger4000/infinite-fake-website/master/total.png)

I started borking up spiders that I thought were bad actors 2012-10-31. I started
running a [WordPress honey pot](http://stratigery.com/phparasites/) towards the
end of May, 2013.

![ahrefs response](https://raw.githubusercontent.com/bediger4000/infinite-fake-website/master/ahrefs.png)

I sent Ahrefs down the rabbit hole beginning 2012-12-29. They really react poorly to
this treatment.

![baidu response](https://raw.githubusercontent.com/bediger4000/infinite-fake-website/master/baidu.png)

I started treating Baiduspider poorly 2013-01-01. Baidu seems to be able to handle
this sort of thing without much trouble. It actually looks like Baiduspider detects
something wrong, and quits asking for many URLs for a while.

![yandex response](https://raw.githubusercontent.com/bediger4000/infinite-fake-website/master/yandex.png)

Between 2012-10-31 and 2013-09-07, I believed `yandex.ru` to be a bad, spammy sort of
search engine. I now believe I was mistaken, and I owe Yandex people an apology.
Nevertheless, This chart shows that Yandex's code recovers almost instantly. When I turned
off `bork.php` for Yandex spiders, the spiders quit asking for funky URLs rapidly. By 2013-10-30, Yandexbot
had returned to asking almost entirely for URLs that exist (give a 200 response code). A brief flare up
happned from 2014-04-11 through 2014-04-15.
