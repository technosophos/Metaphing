# Architecture and TODO list

## Architecture

metaphing...

 * Has its own Phing build.xml script that generates new projects by...
 * Creating an initial project directory with a build.xml
 * And comes with a nice shell wrapper (or perhaps a phar package) to make it easy to execute

## TO DO

LICENSE FILES:

  - Set default to MIT
  - Replace date
  - replace author
  - Replace first line with project name
  
README.md:

  - Set title on first line
  - Scaffold for INSTALLATION and USAGE sections
  
DIRECTORIES TO CREATE:

  - src
  - test
  - examples
  - doc
  - data
  - scripts
  - bin/build
  - dist
  
PEAR SETUP

  - Default build is to PEAR 1.9
  - Support for Pyrus?
  - Support for Pirum using Phing-Pirum
  
UNIT TEST SETUP

  - Set up location for testing classes
  - Set up quick test target
  - Set up full test target
  - Set up TM test target

PHP DOC SETUP

  - Set up full doc build
  - Set up doc clean
  - Pick a default template

EXAMPLES SETUP

  - Put PHPDOC tutorials in here?

LINT SETUP

  - Lint task should simply check code

SETUP SETUP

  - Set version number for release

TEXTMATE INTEGRATION

  - Map the two TM targets
