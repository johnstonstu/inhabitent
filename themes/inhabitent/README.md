# Inhabitent

A WordPress theme: Inhabitent
By: Stuart Johnston

### Technologies used:

* Wordpress (WP)
* HTML / CSS
* JS / jQuery
* PHP / SQL

### Major lessons learned:

* Create custom WP theme
* Wordpess mySQL database
* WP 'The Loop'
* Custom post type / catagory / taxonomy / login page / page templates
* Edit WP admin dashboard

### Major Obsticles

* Looping through post types / custom taxonomy
* Linking
* Deciding what classes to use for styling
* WP template hierarchy

## Installation

### 1. Download me (don't clone me!)

Then add me to your `wp-content` directory.

### 2. Rename the `Inhabitent-master` directory

Make sure that the theme directory name is project appropriate!

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** next to install the node modules you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).
