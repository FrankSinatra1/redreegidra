<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
class WorkController extends Controller
{
    public function index()
    {

        return view('work');
    }

    public function getAllItems($param){
        if($param == 0) {
            $allwork = Work::orderBy('id', 'deck')->limit(4)->get();

        }
        else{
            $allwork = Work::where('category', $param)->orderBy('id', 'deck')->limit(4)->get();
        }
        return response()->json($allwork)->header('Cache-Control', 'public');
    }



}
