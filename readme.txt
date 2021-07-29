=== Static Mail Sender Configurator ===
Contributors: jakubboucek
Tags: wp_mail, sender, mail from, mail sender
Requires at least: 4.9.6
Tested up to: 5.7
Stable tag: 0.9.2
Requires PHP: 7.3.0
License: MIT
License URI: https://github.com/jakubboucek/wp-static-mail-sender-configurator/blob/master/LICENSE

Simple & static configure WordPress internal mailer sender's (`From:`) address.

This plugin is very simple, it doesn't using database or another storage - you just add the constant `WP_MAIL_FROM` to `wp-config.php` or to Environment variable.

Plugin is define this configuration with major priority to set configuration as the **default value**, that means any orher plugin with lower priority applied afterwards can simple rewrite that value.

== Example ==

= Using constant in `wp-config.php` file: =

Add this row to `wp-config.php` file:

    const WP_MAIL_FROM = 'noreply@wordpress.domain.tld';


You can define sender's name too by format:

    "Name Lastname" <noreply@wordpress.domain.tld>

= Using Environment variable: =

Same principe is available by define Environment variable `WP_MAIL_FROM`.

== Changelog ==

= 0.9.2 =

- Fixes plugin localization requirements
- Plugin now requires WordPress version at least 4.9.6

= 0.9.1 =

- Fixes readme documentation only

= 0.9.0 =

- First release to public WordPress Plugin Directory
