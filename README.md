# Brunch with Buttered Koken

Brunch with Buttered Koken is a [Brunch](http://brunch.io/) skeleton for Koken plugin development. Brunch with Buttered Koken utilizes [LESS](http://lesscss.org/).

## Installation
Skeleton install: `brunch new github:oddpixel/brunch-buttered-koken <your-project-name>`.

Or simply copy the repository to your hard drive and rename it.

## Getting started

* Install (if you don't have them):
    * [Node.js](http://nodejs.org)
    * [Brunch](http://brunch.io): `npm install -g brunch`
    * [Bower](http://bower.io): `npm install -g bower`
    * Brunch plugins and Bower dependencies: `npm install` & `bower install` 
* Run:
    * `brunch watch --server` — watches the project with continuous rebuild. This will also launch HTTP server with [pushState](https://developer.mozilla.org/en-US/docs/Web/Guide/API/DOM/Manipulating_the_browser_history).
    * `brunch build --production` — builds minified project for production
* Learn:
    * `plugin/` dir is fully auto-generated and served by HTTP server.  Write your code in `app/` dir.
    * Place static files you want to be copied from `app/assets/` to `public/`.
    * [Brunch site](http://brunch.io), [Backbone site](http://backbonejs.org/)

## Credit
Brunch with Buttered Koken was spawned from [Brunch with Steak](https://github.com/oddpixel/brunch-steak) and customized to suite Koken plugin development.
