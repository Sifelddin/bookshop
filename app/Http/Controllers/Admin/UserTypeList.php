<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserTypeList extends Controller
{
    public function employees()
    {
      
        return view('admin.users.employees');
    }
}
