<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Redirect;
use Nette\Utils\Random;

class MakeLinkController extends Controller
{
    public function __construct()
    {
        $this->middleware = ['auth'];
    }

    public function index()
    {
        echo 'index';
    }

    public function show()
    {
        //page with form show link + params + limit time live
        //return page 404
    }

    public function shorturl()
    {
        //
        // Лимит переходов
        //
        $this->result();
    }

    public function result()
    {

    }

    public function ratelimit()
    {
        $user = 'id';
        $executed = RateLimiter::attempt(
            'send-message:' . $user->id,
            $perMinute = 5,
            function () {
                // Send message...
            }
        );

        if (!$executed) {
            return 'Too many messages sent!';
        }
    }

    public function redirectto404()
    {
        Redirect::action('');

        $token = Random::generate(10, '0-9a-z');
        var_dump($token);
        die('');
        $return = "token";
    }
}
