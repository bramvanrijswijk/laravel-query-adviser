<?php

namespace Socialblue\LaravelQueryAdviser\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class QueryController extends Controller
{
    public function get(Request $request)
    {
        return Cache::get(config('laravel-query-adviser.cache.key'), []);
    }
}