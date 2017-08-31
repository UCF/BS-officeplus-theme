# Business Services Office Plus WordPress theme

Repository for officeplus.ucf.edu WordPress theme build, created by Mike Setzer, maintained by Business Services.
This project includes a full setup of GulpJS and SASS for automation, and Jenkins for deployment.

## System Preparation

1. [NodeJS](http://nodejs.org) - Use the installer.
2. [GulpJS](https://github.com/gulpjs/gulp) - `$ npm install -g gulp` (mac users may need sudo)

## Local Installation

1. Clone this repo or download it into a directory of your choice.
2. `$ cd` into the directory and run `$ npm install`.

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
