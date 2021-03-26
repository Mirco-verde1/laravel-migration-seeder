<?php

namespace App\Http\Controllers\Api;
use App\Card;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function firstCard(){

        $first= Card::orderBy('id','ASC')->first();
       return response()->json($first);
}

}
