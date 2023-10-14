<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    private $myparams = ['12', '112'];
    public function home()
    {

        $params = [
            'length' => '29',
            'width' => 5
        ];
        return view('home', $params, ['myparams' => $this->myparams]);
    }

    public function addHomePost(Request $request)
    {

        dd($request);
        // dd($request->url());
        return view('addHome');
    }

    public function addHomeGet(Request $request)
    {
        dd($request->all());
        print_r("Дай мне форму тварь");
        return view('addHome');
    }
}
