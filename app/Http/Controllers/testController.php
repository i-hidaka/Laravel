<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testController extends Controller
{
    public function index()
    {
        // エロクアントでの取得
        $testData = Test::all();
        dd($testData);

        // クエリビルダでの取得
        $testData = DB::table("tests")->get();
        dd($testData);
    }
}
