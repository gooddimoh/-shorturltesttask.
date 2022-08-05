<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeLinkController extends Controller
{
    public function index()
    {

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

    public function redirectto404()
    {
        $token = "token";
        $return = "token";
    }
}
