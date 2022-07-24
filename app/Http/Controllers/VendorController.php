<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use Illuminate\Support\Facades\Session;

class VendorController extends Controller
{
    public function index(){
        $data['all'] = Vendor::sortable()->paginate(5);
        return view('vendor/all',$data);
    }
    //list of toast
    public function list(){
        $data['page_title'] = 'Toast List';
        return view('vendor/list',$data);
    }
    //success
    public function success(){
        Session::flash('success','Catagory data saved successfully!');
        return redirect('list');
    }
    public function info(){
        Session::flash('info','Auth problem Data Not Saved!');
        return redirect('list');
    }
    public function warning(){
        Session::flash('warning','Catagory data missmatched!');
        return redirect('list');
    }
    public function danger(){
        Session::flash('error','You dont have any permission to add catagory data! Please login as admin');
        return redirect('list');
    }
    public function get_data(){

    }
    public function again_get_data(){
        
    }
}
