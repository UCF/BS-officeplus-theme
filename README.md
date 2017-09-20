[![forthebadge](https://forthebadge.com/images/badges/built-with-wordpress.svg)](http://forthebadge.com) 
[![forthebadge](https://forthebadge.com/images/badges/contains-cat-gifs.svg)](http://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/uses-css.svg)](http://forthebadge.com)

# Business Services Office Plus WordPress theme
Repository for officeplus.ucf.edu WordPress theme build, created by Mike Setzer, maintained by Business Services.
This project includes a full setup of GulpJS and SASS for automation, and Jenkins for deployment.

## System Preparation
1. [NodeJS](http://nodejs.org) - Use the installer.
2. [GulpJS](https://github.com/gulpjs/gulp) - `$ npm install -g gulp` (mac users may need sudo)
3. [LibSass](http://sass-lang.com/libsass)

## Getting Started
1. If needed, [install](http://blog.nodeknockout.com/post/65463770933/how-to-install-node-js-and-npm) `node` and `npm` (Node Package Manager).
- If needed, install `gulp` with `npm install gulp -g`.
- Clone this repo with `git clone https://github.com/UCF/BS-officeplus-theme` or download the zip.
- In terminal, `cd` to the folder containing your project. Alternatively, you can type `cd ` and drag the location of the folder into your terminal and hit enter (on Macs).
- In terminal, type `npm install`. If (and _only_ if) `npm install` isn't working, try `sudo npm install`. This should install all [dependencies](#dependencies).
- In terminal, enter `gulp`.
- Your browser should open at `http://localhost:3000`. You can access this same page on any device on the same wifi network and they'll see whats on your screen. It'll even sync scrolls and clicks!
- Edit your code inside of the `src` folder.
- Your complied and minified css, html, and javascript files will be created and updated in `dist/`. Never edit files within the `dist/` folder, as it gets deleted frequently.
- Keep `gulp` running while you're making changes. When you want to stop the gulp task, hit `ctrl + C`.

_For theming: add separate file (theme.scss) in`src/scss/themes/`, override the default `$theme` variable, and run `gulp themes`._

## Usage
**Development Mode**

This will give you file watching, auto-rebuild, and CSS injection.

```shell
$ gulp
```

## Deployment
- The Dev branch is automatically deployed to the Office Plus Dev environment
- The Master branch is automatically deployed to the Office Plus QA environment
- *Deployment to production is done manually via Jenkins using release versions*
- **Be sure to update the style.css with the version on new releases.**

## Features
- Sass linting (based on [default](https://github.com/sasstools/sass-lint/blob/master/lib/config/sass-lint.yml) config)
- Autoprefixer configuration
- SMACSS and Atomic Design-based folder structure
- `px` to `em`, `px` to `rem` and other useful functions.
- Mixins for inlining media queries.
* Useful CSS helper classes.
* Default print styles, performance optimized.
* "Delete-key friendly." Easy to strip out parts you don't need.

## Dependencies
```
  "colors": "^1.1.2",
  "del": "^2.0.2",
  "gulp-autoprefixer": "^2.1.0",
  "gulp-rename": "^1.2.0",
  "gulp-sass": "^1.3.2",
  "gulp-sass-lint": "1.0.1",
  "gulp-sourcemaps": "^1.5.2",
  "sassdoc": "^2.1.15",
  "vinyl-paths": "^2.0.0"
```

## Tasks
- styles
- sass-lint
- watch
- default
  - styles
  - watch
- build
  - styles

  ## SMACSS Directory structure

```
┌── .gitignore
├── .sass-lint.yml
├── .travis.yml
├── lib
│   └── scss
│       ├── atoms
│       │   └── _index.scss
│       ├── base
│       │   ├── _base.scss
│       │   └── _index.scss
│       ├── layout
│       │   └── _index.scss
│       ├── libs
│       │   ├── _index.scss
│       │   ├── _normalize.scss
│       │   └── _pesticide.scss
│       ├── molecules
│       │   └── _index.scss
│       ├── organisms
│       │   └── _index.scss
│       ├── overrides
│       │   └── _index.scss
│       ├── partials
│       │   └── _home.scss
│       │   └── _index.scss
│       ├── states
│       │   ├── _index.scss
│       │   └── _print.scss
│       ├── themes
│       │   └── rebeccapurple.scss
│       ├── utilities
│       │   ├── _colors.scss
│       │   ├── _config.scss
│       │   ├── _fonts.scss
│       │   ├── _functions.scss
│       │   ├── _index.scss
│       │   ├── _mixins.scss
│       │   └── _typography.scss
│       ├── styles.scss
│       ├── styles.css
│       └── _shame.scss
├── gulpfile.js
├── README.md
└── package.json
```

## Thanks & Resources

This toolkit is based on the work of the following fine people & projects.

- [Sassy Starter](https://github.com/minamarkham/sassy-starter)
- [HTML5 Boilerplate](https://github.com/h5bp/html5-boilerplate)
- [Scalable and Modular Architecture for CSS](http://smacss.com/book) (<abbr title="Scalable and Modular Architecture for CSS">SMACSS</abbr>)
- [Atomic Design](http://atomicdesign.bradfrost.com)
