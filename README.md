# Annoy bad actors with a fake, infinite web site!

# Prerequisites

* Apache httpd
* mod_php
* mod_rewrite

## mod_rewrite Configuration

    RewriteCond %{HTTP_USER_AGENT} MJ12bot
    RewriteRule  ^.*(\?.*)*$ /bork.php$1 [L]

## Effects
![ahrefs response](https://raw.githubusercontent.com/bediger4000/infinite-fake-website/master/ahrefs.png)
![baidu response](https://raw.githubusercontent.com/bediger4000/infinite-fake-website/master/baidu.png)
![yandex response](https://raw.githubusercontent.com/bediger4000/infinite-fake-website/master/yandex.png)
