#!/usr/bin/env php
<?php
/**
 * metaphing.php is a frontend to MetaPhing.
 *
 * This file is derived largely from Fortissimo's fff.php.
 * @package metaphing
 * @author M Butcher
 */
 
/* This is from phing.php */
if (getenv('PHP_CLASSPATH')) {
  if (!defined('PHP_CLASSPATH')) { define('PHP_CLASSPATH',  getenv('PHP_CLASSPATH') . PATH_SEPARATOR . get_include_path()); }
  ini_set('include_path', PHP_CLASSPATH);
} else {
  if (!defined('PHP_CLASSPATH')) { define('PHP_CLASSPATH',  get_include_path()); }
}

require 'MetaPhingFoundation.php'; 
require 'phing/Phing.php';

$buildfile = MetaPhingFoundation::getBuildXML();
$origindir = MetaPhingFoundation::getLibraryPath();

$args = isset($argv) ? $argv : $_SERVER['argv'];

if (count($argv) < 2 || $argv[1] == '-h' || $argv[1] == '--help') {
  echo "${argv[0]} [-t] projectName
  
Create a new PHP project. This command will build out all of
the necessary directories and files for begining a new project.

Options:
  -t, --test: Test only. Print out information about where the new project would be 
      created and exit.
";
  exit(1);
}

array_shift($args);

$projectName = array_pop($args);
$build_target = 'newProject';

foreach ($args as $arg) {
  switch ($arg) {
    case '-t':
    case '--test':
      $build_target = 'test';
      break;
    default:
      printf("Unknown argument %s. Ignoring.\n", $arg);
      break;
  }
}

$phing_args = array(
  '-Dproject=' . $projectName,
  '-Dorigindir=' . $origindir,
  '-f',
  $buildfile,
  $build_target,
);

/*
 * Bootstrap and run Phing.
 * See phing.php for documentation on what is happening here.
 */
try {
 
  Phing::startup();
  Phing::setProperty('phing.home', getenv('PHING_HOME'));
  Phing::fire($phing_args);
  Phing::shutdown();
 
} 
catch (ConfigurationException $x) {
  Phing::printMessage($x);
  exit(-1);
}
catch (Exception $x) {
  exit(1);
}
print "Project is now created." . PHP_EOL;


?>