<?php

namespace App\Http\Controllers;

use App\Models\Bucketlist;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function getMenu()
    {
        $bucketlist = Bucketlist::all();
        return view('menu')->withBucketlist($bucketlist);
    }
}
