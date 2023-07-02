<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;

class MenuActiveHelpers
{
    private $current_route_name;
    public function __construct($currentRouteName='')
    {
        $this->current_route_name = $currentRouteName;
    }

    public static function routeNameActive(string $routeName): string
    {
        if (Route::currentRouteName()==$routeName){
            return "active-custom";
        }
        return '';
    }
    public static function routesNameActive(array $routesName): string
    {
        if (in_array(Route::currentRouteName(), $routesName)){
            return "active";
        }
        return '';
    }
    public static function routesNameToggle(array $routesName): string
    {
        if (in_array(Route::currentRouteName(), $routesName)){
            return "toggled";
        }
        return '';
    }
}
