<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class MarketingPageController extends Controller
{
    public function home(): View
    {
        return view('pages.marketing.home');
    }
}
