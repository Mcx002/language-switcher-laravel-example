<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;

class MyController extends Controller
{
    //
    public function check(){
        $data = Word::with('item')->with('language')->where('language_id',1)->get();
        $result = array();
        foreach ($data as $key => $item) {
            $result[$item->item->name] = $item->value;
        }
        return view('welcome',['data'=>$result]);
    }
}
