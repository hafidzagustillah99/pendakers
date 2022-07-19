<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    function refereshCapcha(){
        return captcha_img(  'config: flat' );
    }
}
