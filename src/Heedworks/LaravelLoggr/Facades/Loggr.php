<?php namespace Heedworks\LaravelLoggr\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Loggr extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'loggr'; }
 
}