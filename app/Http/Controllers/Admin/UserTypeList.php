<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserStatus;
use Illuminate\Http\Request;

class UserTypeList extends Controller
{
    public function employees()
    {
      $users = UserStatus::all()->users;
      dd($users);
        return view('admin.users.employees');
    }
    public function suppliers()
    {
      
        return view('admin.users.suppliers');
    }
    public function customers()
    {
      
        return view('admin.users.customers');
    }
}
