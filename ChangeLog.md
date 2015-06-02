### April 11th, 2007 ###
  * Added support for post uppercase Titles (using the tag {UPTITLE} )
  * Added a charset to the newsletter equal to the used in Wordpress.
  * Added a different date for internal calculations, from the one used to present the newsletter last submission. Prevents some posts to be lost when changing from submitting periodicity.
  * Fixed [issue #2](https://code.google.com/p/wp-ajax-newsletter/issues/detail?id=#2) – Duplicated emails, thanks to mauro\_at\_bjmaster\_dot\_com
  * Fixed [issue #9](https://code.google.com/p/wp-ajax-newsletter/issues/detail?id=#9) - .info domain fails to validate
  * Fixed [issue #10](https://code.google.com/p/wp-ajax-newsletter/issues/detail?id=#10) - Fixed problem with links for weblogs with a home different from the wordpress url.
  * Fixed bug in manual and every periodicity newsletters.
  * Fixed trimming problem when saving settings (e.g., the newsletter header)
  * Improved the “Every Number of posts” to send only the number specified instead of all posts since last newsletter.
  * Improved manual submission to allow set a limit to the number of posts to send.
  * Improved newsletter to present posts in the same order as the weblog, i.e., newer items appear before older items.
  * Improved the subscription form. It no longer fills automatically the email of already subscribed users.
  * Removed forced style from the newsletterContainer
  * Changed from overlay.js to preview.js to prevent being blocked by add-blockers (e.g. AdBlock for Firefox)

### March 23rd, 2007 ###
  * Fixed [issue #5](https://code.google.com/p/wp-ajax-newsletter/issues/detail?id=#5) - Newsletters set to "Manual" or "Every..." periodicity did not work.
  * Improved messages.
  * Improved email auto-fill for registered users.

### March 20th, 2007 ###
  * Added default periodicity for newsletter.
  * Changed Monthly and Weekly newsletters to send only the previous Week/Month.
  * Fixed [issue #1](https://code.google.com/p/wp-ajax-newsletter/issues/detail?id=#1) - Error creating table.
  * Fixed  Monthly and Weekly date verifications on year change.
  * Fixed bug when ' or " where used in the newsletter configuration fields (removed backslashes).
  * Updated to RC2.

### March 20th, 2007 ###
  * Project created and added to the repository (v1.0 RC1)