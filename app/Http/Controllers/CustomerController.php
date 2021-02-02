<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\customer;

class CustomerController extends Controller {

    public function index() {
        //echo "customer controller";
        $db = customer::select('nama_perusahaan','alamat','contact_no_perusahaan')->get();

        // Var pass to View
        $data = array(
            'target' => $db,
            'Description' => 'This is New Application',
            'author' => 'foo'
        );

        return view('customer')->with($data);
    }

    public function insertCustomer() {
        
    }

}
