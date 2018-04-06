<?php
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 2018-04-05
 * Time: 4:52 PM
 */

namespace App\Http\Controllers;


class PagesController extends Controller
{
    protected function contact()
    {
        return view("pages/contactMe");
    }
}