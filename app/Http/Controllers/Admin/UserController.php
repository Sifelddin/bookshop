<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserStatus;
use App\Models\Department;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->count();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('status')->find($id);
        $g_status = UserStatus::where('status_id',$user->status->general_status_id)->first();
      
        return view('admin.users.show',compact('user','g_status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $user = User::find($id);
        $commercial = User::find($user->user_commercial_id);
        $departement = Department::find($user->user_dep_id);
        $departements = Department::all();
        $employe_status = UserStatus::where('status_name','Employe')->first();
        $employees = UserStatus::with('users')->where('general_status_id',$employe_status->status_id)->get()->flatMap(function($status){
            return $status->users;
        });
        $g_status = UserStatus::where('status_id',$user->status->general_status_id)->first();
        $statuses = UserStatus::where('general_status_id','!=', null)->get();
        return view('admin.users.edit',compact('user','commercial','g_status','statuses','departement','departements','employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $user = User::find($id);
        $request->validate([
            'status' => ['required'],
        ]);
        $user->user_status_id = $request->status;
        $user->user_dep_id = $request->departement;
        $user->user_commercial_id = $request->commercial;
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
