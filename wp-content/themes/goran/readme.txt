=== Goran ===

Contributors: automattic
Tags: gray, red, white, light, two-columns, left-sidebar, right-sidebar, responsive-layout, custom-background, custom-colors, custom-header, custom-menu, editor-style, featured-images, flexible-header, full-width-template, post-formats, rtl-language-support, sticky-post, theme-options, translation-ready

Requires at least: 3.5
Tested up to: 3.9
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A modern business theme.

== Description ==

Goran is a functional and responsive multi-purpose theme that is the perfect solution for your business’s online presence.

* Responsive layout.
* Front Page Template.
* Full Width Page Template
* Grid Page Template
* Alternate Sidebar Page Template
* Jetpack.me compatibility for Infinite Scroll, Testimonial Custom Post Type, Responsive Videos, Site Logo.
* The GPL v2.0 or later license. :) Use it to make something cool.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= I don't see the Testimonial menu in my admin, where can I find it? =

To make the Testimonial menu appear in your admin, you need to install the [Jetpack plugin](http://jetpack.me) because it has the required code needed to make [custom post types](http://codex.wordpress.org/Post_Types#Custom_Post_Types) work for the Goran theme.

Once Jetpack is active, the Testimonial menu will appear in your admin, in addition to standard blog posts. No special Jetpack module is needed and a WordPress.com connection is not required for the Testimonial feature to function. Testimonial will work on a localhost installation of WordPress if you add this line to `wp-config.php`:

`define( 'JETPACK_DEV_DEBUG', TRUE );`

= How to setup the front page like the demo site? =

The demo site URL: http://gorandemo.wordpress.com/?demo

When you first activate Goran, you’ll see your posts in a traditional blog format. If you’d like to use this template as the front page of your site, follow these instructions:

1. Create or edit a page, and then assign it to the Front Page Template from the Page Attributes module.
2. Add an introduction to your site. For best results, we recommend a few paragraphs.
3. Set your front page image — behind the text — as a Featured Image.
4. Go to Settings → Reading and set “Front page displays” to “A static page.”
5. Select the page to which you just assigned the Front Page Template as “Front page,” and then choose another page as “Posts page” to display your blog posts.

= What are the theme options? =

Goran comes packed with multiple Theme Options available via the Customizer:

* Sidebar Position: choose to display the sidebar on the left or right.
* Top Area Content: display some content above the header — perfect for a phone number or an email address.
* Thumbnail Aspect Ratio: choose the aspect ratio of the thumbnails used for the Grid Page Template or for the Featured Page Areas.
* Front Page: show title: display the Front Page Template’s title.
* Front Page: Featured Page One: select a page to feature on the Front Page Template.
* Front Page: Featured Page Two: select a page to feature on the Front Page Template.
* Front Page: Featured Page Three: select a page to feature on the Front Page Template.

= How to add the social links? =

Goran allows you to display links to your social media profiles — like Twitter and Facebook — as icons using a Custom Menu.

- Set up the menu -

To automatically apply icons to your links, simply create a new Custom Menu and give it a name that starts with “Social” (e.g. “Social Menu,” “Social Links”). This specific name is important – it must start with the word “Social” to work correctly.

Next, add each of your social links to this menu. Each menu item should be added as a custom link.

Once your menu is created and your social links are added, you can display it in your Footer Menu. You can also create a new Custom Menu Widget to display it in any of Goran‘s widget areas as seen on the demo site.

Goran will automatically display an icon for each service if it’s available.

- Available icons -

Linking to any of the following sites will automatically display its icon in your menu:

* Codepen
* Digg
* Dribbble
* Dropbox
* Facebook
* Flickr
* GitHub
* Google+
* Instagram
* LinkedIn
* Email (mailto: links)
* Pinterest
* Pocket
* PollDaddy
* Reddit
* RSS Feed (urls with /feed/)
* StumbleUpon
* Tumblr
* Twitter
* Vimeo
* WordPress
* YouTube

= Where are located the widget areas? =

Goran offers seven widget areas, which can be configured in Appearance → Widgets:

* An optional sidebar widget area, which appears on the right or left.
* Three optional footer widget areas.
* Three optional widget areas on the Front Page Template.

= Custom Header Image, how does it work? =

Pages without a Featured Image will display a Custom Header (if you’ve uploaded one). To set the Custom Header simply go to Appearance → Header and select your header image.

= What are the extra CSS classes? =

Goran comes with two special CSS styles, button and button-minimal. You can add these classes to your links in the Text Editor, to create “call to action” buttons.

For example:

<a href="http://gorandemo.wordpress.com/" class="button">Button</a>

<a href="http://gorandemo.wordpress.com/" class="button-minimal">Button Minimal</a>

== Quick Illustratr Specs (all measurements in pixels) ==

1. The main column width is 700 except in the full-width layout where it’s 1086.
2. A widget is 314.
3. Featured Images for posts are 772 wide by unlimited high.
4. Featured Images for pages are 1230 wide by 1230 high.

== Changelog ==

= 1.2 - May 5 2015 =
* Add support for Jetpack Testimonial CPT

= 1.1.1 - Jan 22 2015 =
* Remove javascript dependency from the parent theme (Edin)

= 1.1 - Nov 27 2014 =
* Add support for the Eventbrite API plugin.

= 1.0.1 - Sep 8 2014 =
* Add credits to readme.txt
* Reduce Custom Header Image recommended height

= 1.0 - Aug 28 2014 =
* Initial release.

== Credits ==

* Images: images by Daniel Friesenecker via Pixabay (http://pixabay.com/en/users/TheAngryTeddy/), licensed under [CC0](http://creativecommons.org/choose/zero/)