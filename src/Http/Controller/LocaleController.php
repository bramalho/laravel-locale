<?php

namespace BRamalho\LaravelLocale\Http\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index(Request $request)
    {
        session()->put('locale', $request->get('locale'));

        return redirect()->back();
    }
}
