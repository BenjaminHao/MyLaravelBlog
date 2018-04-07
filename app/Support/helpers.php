<?php
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 2018-04-06
 * Time: 22:14 PM
 */

if (!function_exists('user'))
{
    function user($driver = null)
    {
        if ($driver)
        {
            return app('auth')->guard($driver)->user();
        }
        return app('auth')->user();
    }
}