<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\target;

class TargetController extends Controller {

    public function index() {
        //        echo 'target page controller';
        return view('target');
    }

    public function updateTarget(Request $request) {
        // Ambil Data
        dd($request->all());
        $target = $request->target;

        $db->target = 'Paris to London';
        $db->save();
    }

}
