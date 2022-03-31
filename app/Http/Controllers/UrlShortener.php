<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use App\Models\RealUrl;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Events\Validated;
use function GuzzleHttp\Promise\all;

class UrlShortener extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index()
    {
        return view('formgenerateurls');
    }

    public function shorturlredirect(Request $request)
    {


    }

    public function generateshorturl(Request $request)
    {

        $shorturl = ShortUrl::generateshorturl();
        $realurl = $request->get('realurl');

        $shorturlmodel = new ShortUrl();
        $shorturlmodel->shorturl = $shorturl;

        $realurlmodel = new RealUrl();
        $shorturlmodel = new ShortUrl();

        $realurlmodel->realurl = $realurl;
        $realurlmodel->save();

        $shorturlmodel->shorturl = Str::random(16);
        $shorturlmodel->save();

        $realurls = RealUrl::all();
        $shorturls = ShortUrl::all();

        return view('shorturl', $shorturls);

    }

    public function showurls()
    {
        $shorturls = ShortUrl::all();
        return view("result", ['shorturls' => $shorturls]);
    }
}
