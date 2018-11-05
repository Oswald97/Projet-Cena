<?php

if (! function_exists('route_active')) {
  function route_active($route){

    return Route::is($route) ? 'active' : '';
  }
}
