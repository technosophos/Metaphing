# MetaPhing: Kickstart Your Project

Ease the process of starting a new project. Increase the consistency between projects. Get that cool project you have in mind started with metaphing.

MetaPhing is a tool for quickly scaffolding a new project, including generating a framework for...

* Managing your code with [phing](http://phing.info)
* Managing source directories according the the [PEAR standard format](http://pear.php.net/manual/en/pyrus.commands.make.php)
* Building documentation with [phpDocumentor](http://phpdoc.org)
* Unit testing with [PHPUnit](http://phpunit.de)
* Packaging your code into PEAR packages
* Managing a PEAR channel with [pirum](http://pirum-project.org)
* And using Git and GitHub to manage version control

Start a project by running `metaphing PROJECTNAME`. This will create for you...

* A project directory
* The standard directories (`doc`, `src`, `tests`, `examples`, etc.) that projects typically need
* A `build.xml` that will be able to do the following:
  * Run unit tests
  * Generate PHP Documentor documents from `docs` and `examples`
  * Lint (syntax check) your code
  * Build distributions of your code (typically tarballs and PEAR packages)
  * Handle adding your PEAR packages to a PEAR channel
* Standard `README.md`, `CHANGES`, and `LICENSE` files that are included in most packages

Once you've gotten a project started with metaphing, you can modify your environment to suite your own wants and needs. And while metaphing doesn't force you into any version control system (VCS), it prepares your code for inclusion in a VCS.

## Installation

## Usage

------
metaphing was written by Matt Butcher (technosophos). It is released under an MIT-style license.
