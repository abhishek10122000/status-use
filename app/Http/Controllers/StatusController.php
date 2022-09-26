<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    public function index(Request $req){
        $data['title']=Status::all();
        if($req->isMethod('post')){
            $data=$req->validate([
                'title'=>'required'
            ]);
            Status::create($data);
            return redirect()->route('home');
        }
        return view('home',$data);
    }
    public function statusfalse($id){
        $status=Status::find($id);
        $status->status=false;
        $status->save();
        // if($status->status=='1'){
        //     $sat='0';
        // }
        // else{
        //     $sta='1';
        // }
        
        return redirect()->route('home');

    }
    public function statustrue($id){
        $status=Status::find($id);
        $status->status=true;
        $status->save();
        // if($status->status=='0'){
        //     $sat='1';
        // }
        // else{
        //     $sta='0';
        // }
        
        return redirect()->route('home');

    }
}
