<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use App\Models\UrlModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Events\Validated;

class UrlShortener extends Controller
{
    public function index()
    {
        return view();
    }

    public function generateshorturl(Request $request)
    {

        $url = $request->url;

        $url = new RealUrl();
        $shorturl = new ShortUrl();
        $url->realurl = "url";
        $url->shorturl = Str::random(16);
        $url->save();

        ShortUrl::all();

        return view('shorturl');

    }

    public function shorturlredirect(Request $request)
    {
        $shorturl = new ShortUrl();
        $realurl = $request->get('shorturl');

        ShortUrl::where
        return redirect($realurl);
    }

    public function result()
    {
        return view("result");
    }
}
