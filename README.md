# Tracking Analytics

Track any kind of action in a Google Analytics account even out of a page you control (i.e. Pixel Tracking)

## How it works

1. [_a.js](ta/_a.js) you see a normal GA initialization, but without the pageview track since we don't need it.

2. [t.php](ta/t.php) is where the track occurs and depending on a redirect parameter (`r`) it redirects user somewhere, like the a landing page after a banner click.

3. [c.php](ta/c.php) is where it can look up to the cookies for the previous query string parameters (i.e. utm_'s) and be placed in a `<iframe>` of a success page to track any kind of conversion. See [success.html](example/success.html).

## The example
1. [display.html](example/display.html) simulates a page where a campaign is displayed, can be a banner, an email marketing, a tweet or a post on Facebook. It is just a link.

2. [landing-page.html](example/landing-page.html) simulates a destination page where the user lands after clicking a campaign.

3. [success.html](example/success.html) simulates the conversion page, like after a form fill or a purchase. Its where our iframe pixel works calling [c.php](ta/c.php) and telling what the action of this event.

## To use
Checkout or download this repository inside the webroot of a PHP enabled webserver, replace the current UA id at [_a.js](ta/_a.js) for someone you own and go to [display.html](example/display.html) thought your web browser.

### Dictionary

| What | Definition |
| :---: | :---: |
| _a | Analytics |
| _dm | Dimensions & Metrics |
| _r & r | Redirect |
| c | Cookies |
| t | Track |
| h | Hit Type |
| e | Event |
| p | Page(view) |
| a | Action |
| d[0-9] | Dimension |
| m[0-9] | Metric |

### Building a URL (by examples)

* Track an event with action "foobar"

`http://mytrackdomain.com/ta/t.php?h=e&a=foobar`

* Track a pageview with url "/barqux"

`http://mytrackdomain.com/ta/t.php?h=p&p=barqux`

* Track an event using cookied parameters

`http://mytrackdomain.com/ta/c.php?h=e&a=eventname`

* Tracking with dimensions and metrics

`http://mytrackdomain.com/ta/t.php?h=e&a=eventaction&d1=dimension1value&m1=metric1value`

#### Doesn't get it?
`h` is Hit Type `e` is event, so `h=e` is Event Hit Type.
Then `p` is Pageview so `h=p` is Pageview Hit Type.


![WTFPL Badge](http://www.wtfpl.net/wp-content/uploads/2012/12/wtfpl-badge-4.png)