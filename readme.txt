=== Static Mail Sender Configurator ===
Contributors: jakubboucek
Tags: wp_mail, sender, mail from, mail sender
Requires at least: 2.2.0
Tested up to: 5.7
Requires PHP: 7.3.0
Stable tag: trunk
License: MIT
License URI: https://github.com/jakubboucek/wp-static-mail-sender-configurator/blob/master/LICENSE

Simple & static configure WordPress internal mailer `From:` address.

This plugin is very simple, it doesn't using database or another storage - just simple put
constant `WP_MAIL_FROM` to `wp-config.php` or to Environment variable.

Plugin is define this configuration with major priority to set configuration as a default effective value, that means
any orher plugin with lower priority is applied afterwards and can simple rewrite that values.

Tip: Based to WordPress internal specifics

== Example ==

= Using constant in `wp-config-php` file =

```php
const WP_MAIL_FROM = 'noreply@wordpress.domain.tld';
```

You can set sender's name by fotmat: `"Name Lastname" <noreply@wordpress.domain.tld>`

= Using Environment variable =

Same principe is available by define Evironment variable `WP_MAIL_FROM`.

== Changelog ==

= 0.9.0 =

First release