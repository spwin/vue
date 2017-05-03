<?php

namespace App\Http\Controllers;

use Collective\Html\HtmlFacade as Html;

class HomeController extends Controller
{
    public function index(){
        $email = json_encode(Html::email('stanislav.markevic@gmail.com'));
        return view('pages.homepage', compact('email'));
    }
}
