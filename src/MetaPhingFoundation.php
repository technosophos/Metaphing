<?php
/**
 * This is the main class for the Fortissimo framework generator.
 */
class MetaPhingFoundation {
  public static function getBuildXML() {
    return dirname(__FILE__) . '/metaphing.xml';
  }
  
  public static function getLibraryPath() {
    return dirname(__FILE__);
  }
}