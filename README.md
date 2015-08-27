# Tracking Analytics

Track any kind of action in a Google Analytics account even out of a page you control (i.e. Pixel Tracking)

## How it works

1. [_analytics.js](ta/_analytics.js) you see a normal GA initialization, but without the pageview track since we don't need it.

2. [e.php](ta/e.php) is where the track occurs and depending on a redirect parameter (`r`) it redirects user somewhere, like the a landing page after a banner click.

3. [se.php](ta/se.php) is where it can look up to the session for the previous query string parameters (i.e. utm_'s) and be placed in a `<iframe>` of a success page to track any kind of conversion. See [success.html](example/success.html).

## The example
1. [display.html](example/display.html) simulates a page where a campaign is displayed, can be a banner, an email marketing, a tweet or a post on Facebook. It is just a link.

2. [landing-page.html](example/landing-page.html) simulates a destination page where the user lands after clicking a campaign.

3. [success.html](example/success.html) simulates the conversion page, like after a form fill or a purchase. Its where our iframe pixel works calling [se.php](ta/se.php) and telling what the action of this event.

## To use
Checkout or download this repository inside the webroot of a PHP enabled webserver, replace the current UA id at [_analytics.js](ta/_analytics.js) for someone you own and go to [display.html](example/display.html) thought your web browser.