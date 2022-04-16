<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Subitem;

class PagesController extends Controller
{
    //
    public function index(){
        
        $item=Item::all();
        $sitem=Subitem::all();
        return view('index')
        ->with('item', $item)
        ->with('sitem', $sitem);
    }
    public function itemadd(Request $req){
        if($req->do==1){
            $item=new Item();
            $sitem=Subitem::all();
            $item-> val=" ";
            $item->save();
        }
        if($req->do==2){
            $sitem=new Subitem();
            $item=Item::all();
            $sitem-> val=" ";
            $sitem-> i_id=$req->i_id;
            $sitem->save();
        }
        return redirect()->route('index')
        ->with('item', $item)
        ->with('sitem', $sitem);
    }
    public function sitemadd(){
        
        $sitem=new Subitem();
        $item=Item::all();
        $sitem-> val=" ";
        $sitem->save();
        return redirect()->route('index')
        ->with('item', $item)
        ->with('sitem', $sitem);
    }
}
