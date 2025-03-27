<?php

namespace App\Http\Controllers;

use App\Models\Exception;
use App\Models\Site;
use Illuminate\Http\Request;

class ExceptionController extends Controller
{
    public function create(Request $request)
    {
        $site = Site::where('uuid', $request->get('uuid'))->firstOrFailt();

        Exception::create([
            'site_id' => $site->id,
            'message' => $request->get('message'),
            'url' => $request->get('url'),
            'data' => $request->all(),
        ]);
    }
}
