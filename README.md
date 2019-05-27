=== Embed Privacy ===
Contributors: epiphyt, kittmedia, krafit
Tags: oembed, privacy, gutenberg
Requires at least: 4.7
Tested up to: 5.2
Requires PHP: 5.6
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Embed Privacy prevents loading of embedded external content and allows your site visitors to opt-in.

== Description ==

Content embedded from external sites such as YouTube or Twitter is loaded immediately when visitors access your site. Embed Privacy addresses this issue and prevents loading of these contents until the visitor decides to allow loading of external content.
But Embed Privacy not only protects your visitors privacy, but also makes your site load faster.

All embeds will be replaced by placeholders, ready for you to apply style as you wish. With only a couple of lines of CSS. 

By clicking on the placeholder the respective content will be reloaded.


== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/embed-privacy` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress.
1. Embedded content will automatically be replaced by a placeholder and can be loaded on demand by your visitors. There are no additional settings.


== Frequently Asked Questions ==

= Can Embed Privacy keep external services from tracking me/my visitors? =

Yes. As long as you don't opt-in to load external content, you/your visitors can't be tracked by these services.

= Does Embed Privacy make embedding content privacy-friendly? =

The embedding process itself will be privacy-friendly with Embed Privacy. That means, that no third-party embed provider is able to track users without their explicit consent by clicking on the overlay to allow the embed to be loaded. However, to make sure everything is fine you need to expand your privacy policy for each embed provider you’re using or you want to use, because you need to specify, where data will be sent to and what happens to them.

= Does Embed Privacy support the Gutenberg editor? =

Sure thing! We enjoy playing with the new WordPress editor and developed Embed Privacy with Gutenberg in mind, the plugin will work no matter the editor you use.

= Which embeds are currently supported? =

We currently support all oEmbed providers known to WordPress core. Want to know about them? Here you go: Amazon Kindle (since WordPress 5.2), Animoto, Cloudup, CollegeHumor, DailyMotion, Facebook, Flickr, Funny Or Die, Hulu, Imgur, Instagram, Issuu, Kickstarter, Meetup, Mixcloud, Photobucket, Photobucket, Polldaddy.com, Reddit, ReverbNation, Scribd, Sketchfab, SlideShare, SmugMug, SoundCloud, Speaker Deck, Spotify, TED, Tumblr, Twitter, VideoPres, Vimeo, WordPress.org, WordPress.tv, YouTube.

= Who are you folks? =

We are [Epiphyt](https://epiph.yt/), your friendly neighborhood WordPress plugin shop from southern Germany.


== Changelog ==

= 1.1.0 =
* Added option to allow all embeds by one provider
* Added URL rewrite to youtube-nocookie.com
* Added option to save user selection per embed provider
* Added provider logo to our placeholder
* Added option to filter our placeholders markup
* Improved our placeholder markup to be actually semantic
* Fixed typos

= 1.0.2 =
* Improved compatiblity with [Autoptimize](https://wordpress.org/plugins/autoptimize/)
* Improved compatiblity with [AMP](https://wordpress.org/plugins/amp/)
* Fix issue with Slideshare causing wrong (generic) placeholders

= 1.0.1 =
* Fixed support for PHP 5.6

= 1.0.0 =
* Initial release

== Upgrade Notice ==