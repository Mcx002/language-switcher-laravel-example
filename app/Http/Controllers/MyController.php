<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\Item;

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
    public function addword(){
        $data = Word::with('item')->with('language')->get();
        $result = array();
        foreach ($data as $key => $item) {
            $result[$item->item->name][$item->language_id] = $item->value;
        }
        return view('addword',['data'=>$result]);
    }
    public function pushword(Request $request){
        $data = Item::create([
            'name'=>$request->name
        ]);
        $wordpush = Word::insert([
            ['value' => $request->indonesia, 'language_id' => 1, 'item_id' => $data->id],
            ['value' => $request->english, 'language_id' => 2, 'item_id' => $data->id],
            ['value' => $request->hankuk, 'language_id' => 3, 'item_id' => $data->id],
            ['value' => $request->nihon, 'language_id' => 4, 'item_id' => $data->id],
        ]);
        return redirect()->route('addword');
    }
}
