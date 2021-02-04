<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\customer;

class CustomerController extends Controller {

    public function index() {
        //echo "customer controller";
        $db = customer::select('nama_perusahaan', 'alamat', 'contact_no_perusahaan')->get();

        // Var pass to View
        $data = array(
            'target' => $db,
            'Description' => 'This is New Application',
            'author' => 'foo'
        );

        return view('customer')->with($data);
    }

    public function tambahCustomer() {
        // view form tambah customer
        return view('tambahcustomer');
    }

    public function insertCustomer(Request $request) {
        // get data
        $request->all();
        //            "nama_perusahaan" => "PT asjdhgajsghd"
        //            "alamat_perusahaan" => "akjsdhajkshd"
        //            "kontak_perusahaan" => "654659462695"
        //            "nama_pic" => "asdjkh"
        //            "email_pic" => "asdh@gmail.com"
        //            "kontak_pic" => "68764165761654"
        //            "wa" => "8989465496"
        //            "fb" => "aksjdhkajsdh"
        //            "twitter" => "ashdlahsd"
        //              $target = $request->target;
        // insert data DB
        $customer = new customer;
        $customer->nama_perusahaan = $request->nama_perusahaan;
        $customer->alamat = $request->alamat_perusahaan;
        $customer->contact_no_perusahaan = $request->kontak_perusahaan;
        $customer->nama_pic = $request->nama_pic;
        $customer->email = $request->email_pic;
        $customer->contact_no_pic = $request->kontak_pic;
        $customer->twitter = $request->twitter;
        $customer->fb = $request->fb;
        $customer->wa = $request->wa;
        $customer->save();

        // redirect
        return redirect()->route('customer');
    }

}
