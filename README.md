# Annoy bad actors with a fake, infinite web site!

If you've ever read your Apache log files, you know that much of the traffic
to your website is just bots or spiders. Some spiders are from Good Actors,
like Google, or Yahoo. Some spiders are set in motion by Bad Actors, and
a lot of those Bad Actors deserve to be sent down a hole with no bottom.

Do you want to do this? Do you control an Apache web server? If so, `bork.php`
can help you make SEO spammers and others believe that you have the world's
bigget web site, all filled with original, colorful "content". Set up properly,
`bork.php` can generate a new HTML file, a new image (GIF,JPEG or PNG), even
a new `robots.txt` file on every single invocation. This can drive certain
software to the edge of its abilities.

Yes, this is a dual-use technology. We're all adults here, aren't we?

## Features

* Delays a few seconds every time it's invoked.
* Give a random "google-site-verification" code.
* When called with `.html` URL suffix produces HTML. `gif`, `jpeg`, 'png' URL suffixes
produce random images of the appropriate image format.
Any HTML it generates has a lot of "click here" links to randomly-named URLs
on its website.
* When retrieved as `robots.txt`, allows all User Agents for `/`, `/porn`, `/private`
  and a randomly-named URI. If you use `bork.php`, don't be surprised at the rubbish
  that shows up in your `access_log` file.
* Gives every browser who asks a random `favicon.ico` file.
* Produces random HTML, complete with "content" that includes Latin, B-list celebrities,
  condiments, and underwear teminology.
* Produces random streams of binary bits for `.torrent`, `.mp3`, `.gz` URL suffixes.

## Prerequisites

* [Apache httpd](http://httpd.apache.org/)
* [mod_php](https://wiki.apache.org/httpd/php) or some other way of invoking PHP
* [mod_rewrite](https://httpd.apache.org/docs/current/mod/mod_rewrite.html)

## mod_rewrite Configuration

One you have Apache, `mod_php` and `mod_rewrite` installed and working (which I grant
can be difficult), you need to configure `mod_rewrite` to redirect incoming
HTTP requests from notorious bad actors to `bork.php`.

    RewriteCond %{HTTP_USER_AGENT} SomeUglyBot
    RewriteRule  ^.*(\?.*)*$ /bork.php$1 [L]
    RewriteCond %{HTTP_REFERER} ^http://..*/bork.php
    RewriteRule  ^.*(\?.*)*$ /bork.php$1 [L]

The first two lines cause any HTTP request with the string `someUglyBot` in its User Agent string to be satisfied by `bork.php` output. The last two lines allow you to try out `bork.php` yourself with a browser.

There's too many ways to configure Apache for me to tell you where to put this. But it does need to be either in `httpd.conf` or some file included by `httpd.conf`.

You replace `SomeUglyBot` by a string that appears in the User Agent of some organization that you want to mess with. I find that "AhrefsBot" and "MJ12bot" are two good candidate User Agent sub-strings.

### CentOS 8 Installation

#### Packages

I think these are the packages you need to install explicitly.
Installing these via `dnf` installs a number of other packages.

* httpd
* httpd-tools
* php
* php-gd

#### Extra files

* [/etc/httpd/conf.d/rewrite.conf](centos8_rewrite.conf)

That particular rewrite will cause every HTTP request to run `bork.php`,
giving any visitor a colorful, infinitely-deep website to visit!

* Put `bork.php` in directory `/var/www/html/`.

#### Change configuration

Remove the '#' from a line in `/etc/httpd/conf/httpd.conf`:
```
#LoadModule rewrite_module modules/mod_rewrite.so
```

You need to `systemctl restart httpd` after installing packages,
creating the `rewrite.conf` file and changing configuration.

## Effects

The question becomes what does using `bork.php` do to a bad actor
like an SEO search engine?

First, here's a record of the total number of HTTP requests made of my
web site, [http://stratigery.com](http://stratigery.com) since 2009-02-11.

![total daily hits](total.png?raw=true)

I started borking up spiders that I thought were bad actors 2012-10-31. I started
running a [WordPress honey pot](http://stratigery.com/phparasites/) towards the
end of May, 2013.

![ahrefs response](ahrefs.png?raw=true)

I sent Ahrefs down the rabbit hole beginning 2012-12-29. They really react poorly to
this treatment.

![baidu response](baidu.png?raw=true)

I started treating Baiduspider poorly 2013-01-01. Baidu seems to be able to handle
this sort of thing without much trouble. It actually looks like Baiduspider detects
something wrong, and quits asking for many URLs for a while.

![yandex response](yandex.png?raw=true)

Between 2012-10-31 and 2013-09-07, I believed `yandex.ru` to be a bad, spammy sort of
search engine. I now believe I was mistaken, and I owe Yandex people an apology.
Nevertheless, This chart shows that Yandex's code recovers almost instantly. When I turned
off `bork.php` for Yandex spiders, the spiders quit asking for funky URLs rapidly. By 2013-10-30, Yandexbot
had returned to asking almost entirely for URLs that exist (give a 200 response code). A brief flare up
happned from 2014-04-11 through 2014-04-15.

![blexbot response](blexbot.png?raw=true)

Around 2018-12-01,
I decided that the spider that gives you user agent of 
`Mozilla/5.0 (compatible; BLEXBot/1.0; +http://webmeup.com/crawler.html)`
or
`Mozilla/5.0 (compatible; BLEXBot/1.0; +http://webmeup-crawler.com/)`
was up to no good.
BLEXBot started asking for URLs that were obviously the product of `bork.php`,
but without getting fed `bork.php` HTML.
BLEXBot was following links that `bork.php` had given to another spider.
BLEXBot also started asking for URLs from some SEO link spamming software
that got downloaded to my WordPress honey pot.

I gave every access by BLEXBot to `bork.php`.
BLEXBot went nuts,
from making a desultory 10 to 100 HTTP requests a day
to making 2000-9000 HTTP requests a day,
until 2019-12-31.
On 2020-01-01, BLEXbot dropped to 97 hits per day.
Between 2020-01-01 and 2020-04-09, BLEXbot has made no more than 490
calls in a single day. In those 100 days, BLEXbot has made calls on
only 22 days.
In the previous year, it made calls on 364 days,
but my server had some outages, so effectively every day.
This radical change happening on January 1st probably isn't coincidental.
I imagine the BLEXbot people did some kind of cull or other analysis,
and the 3144 unique URLs from a single site probably stood out.

## Conclusion

I conclude that `bork.php` has more effect on shadier, SEO spiders,
less effect on spiders associated with real businesses.
