# Project 4: Inhabitent Wordpress Website
![alt text](https://github.com/ramiwaked1/InhabitentWebsite/tree/master/themes/inhabitent/images/)
![alt text](https://github.com/ramiwaked1/InhabitentWebsite/tree/master/themes/inhabitent/images/)

For Project 4, I created a multi-page website with a blog for a camping supply company called Inhabitent Camping Supply Co. using WordPress as a content management system. We had to create the theme from scratch with just a starter pack with no plugins or CSS at all.

### Functional requirements:

Your project must:

* Be built using WordPress as CMS
* Contain a custom static homepage, About page, Contact page (with a functioning contact form)
* Contain a blog post index page and a single view for blog posts
* Contain a product archive, a product type archive page, and single template for products
* Contain a search results page and 404 page

### General requirements:

Your project must:

* Adequately reflect the designer’s vision for the website
* Demonstrate effective organization of the project’s custom theme and plugin directories
* Have a Git repository initialized in its root directory with an appropriately customized .gitignore file
* Be pushed to GitHub (with all of your commits synced to it)
* Contain a README.md file describing the project (e.g. technologies used, personal learnings, etc.)
* Use Gulp for running build tasks, such as minification and error checking

### WordPress requirements:

Your project must:

* Use the redstarter WordPress theme as a base for building your project
* Support default Posts, Pages, and Comments (one-level deep only)
* Use a WordPress menu (configured through the admin interface) for the main site navigation
* Use a custom page template for the “About” page where a hero image can be dynamically added through a custom field
* Include a custom post type for “Products” inside of a functionality plugin (not the theme files)
* Include a custom taxonomy for “Product Type” inside of a functionality plugin (not the theme files)
* Include applicable custom fields for additional metadata where required (using the Custom Field Suite plugin)
* Include a custom widget plugin to allow business hours to easily be edited in the sidebar by the client
* Include a widgetized area in the sidebar
* Properly enqueue CSS and JS files in the theme’s functions.php file
* Leverage the WP template hierarchy to generate required layouts for the website
* Be validated with Theme Check

### HTML requirements:

Your project must:

* Use the HTML5 doctype and semantic, syntactically-correct HTML5
* Include all essential elements covered in class (e.g. <meta charset="utf-8">), and be dynamically populated with WordPress template tags where appropriate

### CSS/Sass requirements:

Your project must:

* Make appropriate use of classes and IDs as selectors
* Use a CSS reset (normalize.css is included with the redstarter theme)
* Use Sass as a preprocessor, with CSS properly compiled and minified
* Use the background property where appropriate
* Implement a layout using flexbox (no floats)
* Demonstrate effective use of box model properties
* Demonstrate effective use of CSS properties for altering the visual display of text (e.g. font-family, font-style, text-transform, etc.)
* Incorporate custom fonts using @font-face
* Use an icon font

### JS requirements:

* Add a toggle-able search form to the site header where the search input is automatically focused when the form is toggled open

### Tech & Languages Used
Project Aloha uses the following:

* HTML
* CSS
* Javascript
* jQuery
* Javascript

# RED Starter

A WordPress starter theme for RED Academy students, forked from Underscores.

## Installation

### 1. Download me (don't clone me!)

Then add me to your `wp-content` directory.

### 2. Rename the `redstarter` directory

Make sure that the theme directory name is project appropriate!

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** next to install the node modules you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `inhabitent.dev` to the appropriate localhost URL).
