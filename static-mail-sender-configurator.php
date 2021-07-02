<?php

declare(strict_types=1);

namespace JakubBoucek\WpPlugin\MailSenderConfig;

/*
 * Plugin Name: Static Mail Sender Configurator
 * Plugin URI: https://github.com/jakubboucek/wp-static-mail-sender-configurator
 * Description: Simple & static configure WordPress internal mailer `From:` address.
 * Author: Jakub Bouček
 * Author URI: https://www.jakub-boucek.cz/
 * Version: 0.9.1
 * Text Domain: static-mail-sender-configurator
 * Requires at least: 2.2.0
 */

class StaticMailSenderConfigurator
{
    public const WP_MAIL_FROM_KEY = 'WP_MAIL_FROM';

    public static function register(): void
    {
        /** @see \add_filter() from wp-includes/plugin.php */
        add_filter('wp_mail', [static::class, 'wp_mail'], 1);
    }

    public static function wp_mail(array $atts): array
    {
        if (defined(self::WP_MAIL_FROM_KEY) === false && getenv(self::WP_MAIL_FROM_KEY) === false) {
            // No configuration found, skip
            return $atts;
        }

        /**
         * Retype headers to array
         * @see \wp_mail() from wp-includes/pluggable.php
         */
        $headers = $atts['headers'];
        if (!is_array($headers)) {
            // Explode the headers out, so this function can take
            // both string headers and an array of headers.
            $headers = explode("\n", str_replace("\r\n", "\n", $headers));
        }

        if (defined(self::WP_MAIL_FROM_KEY)) {
            $headers[] = "From:" . constant(self::WP_MAIL_FROM_KEY);
        }
        elseif (is_string($env = getenv(self::WP_MAIL_FROM_KEY))) {
            $headers[] = "From:$env";
        }

        $atts['headers'] = $headers;
        return $atts;
    }
}

StaticMailSenderConfigurator::register();