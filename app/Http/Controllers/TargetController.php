<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\target;

class TargetController extends Controller {

    public function index() {
        //        echo 'target page controller';
        
        // Get data target
        $db = target::find(1);
        $target = $db->target;
               
        
        // Var pass to View
        $data = array(
            'target'=>$target,
            'Description'=>'This is New Application',
            'author'=>'foo'
            );
        
        return view('target')->with($data);
    }

    public function updateTarget(Request $request) {
        // get data
        $request->all();
        $target = $request->target;

        //update db
        $db = target::find(1);
        $db->target = $target;
        $db->save();
        
        

    }

}
