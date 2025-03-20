<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Appid;

class AppidController extends Controller
{
    public function index()
    {
        $appids = DB::select("SELECT * FROM appids");
        return response()->json($appids);
    }

    public function store(Request $request)
    {
        Appid::create([
            'appid' => $request->appid
        ]);

        return response()->json('Appid Created!');
    }
}
