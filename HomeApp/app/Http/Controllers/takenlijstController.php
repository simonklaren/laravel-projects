<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Models\User;
use App\Models\Dagen;

class takenlijstController extends Controller{


public function show(){
    $dagen = Dagen::all();
    return view('takenlijst.show', compact('dagen'));
}


}
