[![forthebadge](https://forthebadge.com/images/badges/built-with-wordpress.svg)](http://forthebadge.com)

# Business Services Office Plus WordPress theme
Repository for OfficePlus.ucf.edu WordPress theme build, created by Mike Setzer, maintained by Business Services.
This project includes a full setup of GruntJS and LESS for automation, and Jenkins for deployment.

-----

## System Preparation
1. [NodeJS](https://nodejs.org) - Use the installer.
2. [GruntJS](https://github.com/gruntjs/grunt) - `$ npm install grunt grunt-cli` (mac users may need sudo)
3. [LESS](https://github.com/less/less.js) - `$ npm install -g less` (mac users may need sudo)

## Getting Started
1. If needed, [install](http://blog.nodeknockout.com/post/65463770933/how-to-install-node-js-and-npm) `node` and `npm` (Node Package Manager).
- If needed, install `grunt` with `npm install grunt grunt-cli`.
- Clone this repo with `git clone https://github.com/UCF/BS-officeplus-theme` or download the zip.
- In terminal, `cd` to the folder containing your project. Alternatively, you can type `cd ` and drag the location of the folder into your terminal and hit enter (on Macs).
- In terminal, type `npm install`. If (and _only_ if) `npm install` isn't working, try `sudo npm install`. This should install all [dependencies](#dependencies).
- In terminal, enter `grunt default`.
- Your LESS files will be compiled and minified to `lib/styles.css`
- Keep `grunt` running while you're making changes. When you want to stop the gulp task, hit `ctrl + C`.

## Usage
**Development Mode**

This will give you file watching, auto-rebuild, and CSS injection.

```shell
$ grunt default
```
## WordPress modularization

**WordPress theme files**

- Reusable template parts, such as menus go to `/template-parts`
- Individual parts go to `/templates`

**WordPress style theme modifications are added to the partials folders**

If you are modifying a plugin's CSS, eg. GravityForms, simply:
- Add a _gforms.scss file to partials
- Add the import to partials/_index.scss
- And head the _gforms.scss file with the appropriate selector

## Deployment 
- The Dev branch is automatically deployed to the Office Plus Dev environment
- The Master branch is automatically deployed to the Office Plus QA environment
- *Deployment to production is done manually via Jenkins using release versions*
- **Be sure to update the style.css with the version on new releases.**

## Features
- LESS Linting
- Autoprefixer configuration
- `px` to `em`, `px` to `rem` and other useful functions.
- Mixins for inlining media queries.
* Useful CSS helper classes.
* Default print styles, performance optimized.
* "Delete-key friendly." Easy to strip out parts you don't need.

## Dependencies
```
  "grunt": "^1.0.4",
  "grunt-contrib-less": "^2.0.0",
  "grunt-contrib-watch": "^1.1.0",
  "jit-grunt": "^0.10.0",
  "jshint": "^2.9.5"
```

## Tasks
- watch
- less
- default
  - watch
  - less

## TODO
- Autoprefixer config
- LESS/Grunt Autolint
