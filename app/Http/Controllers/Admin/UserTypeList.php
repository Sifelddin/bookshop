<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\UserStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserTypeList extends Controller
{
    public function employees()
    {
        $employe = UserStatus::where('general_status_id',null)->where('status_name','Employe')->first();
        $statuses = UserStatus::where('general_status_id',$employe->status_id)->get()->sortBy('status_name');
     
        return view('admin.users.employees',compact('statuses'));
    }
    public function suppliers()
    { 
        $supplier = UserStatus::where('general_status_id',null)->where('status_name','Supplier')->first();
        $statuses = UserStatus::where('general_status_id',$supplier->status_id)->get()->sortBy('status_name');
        return view('admin.users.suppliers',compact('statuses'));
    }
    public function customers()
    {
        $customer = UserStatus::where('general_status_id',null)->where('status_name','Customer')->first();
        $statuses = UserStatus::where('general_status_id',$customer->status_id)->get();
        return view('admin.users.customers',compact('statuses'));
    }
}
