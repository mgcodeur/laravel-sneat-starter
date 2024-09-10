<?php

if (! function_exists('is_active_menu')) {
    function is_active_menu($routeName, $activeClass = 'active open')
    {
        return (str_contains(request()->route()->getName(), $routeName)) ? $activeClass : '';
    }
}

if (! function_exists('is_active_submenu')) {
    function is_active_submenu($routeName, $activeClass = 'active')
    {
        return request()->routeIs($routeName) ? $activeClass : '';
    }
}
