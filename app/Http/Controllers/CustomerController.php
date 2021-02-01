<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller {

    public function index() {
        echo "customer controller";

        // Var pass to View
        $data = array(
            'target' => 'la la la',
            'Description' => 'This is New Application',
            'author' => 'foo'
        );

        return view('customer')->with($data);
    }

    public function insertCustomer() {
        
    }

}
