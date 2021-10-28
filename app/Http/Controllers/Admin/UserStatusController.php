<?php

namespace App\Http\Controllers\Admin;

use App\Models\UserStatus;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $g_statuses = UserStatus::where('general_status_id',null)->get();
        $statuses = UserStatus::where('general_status_id','!=',null)->get();
        return view('admin.userStatuses.index',['statuses' => $statuses,'g_statuses' => $g_statuses]);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $g_statuses = UserStatus::where('general_status_id',null)->get();
        return view('admin.userStatuses.create',compact('g_statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'statusName' => ['required','string','max:90'],
           
        ]);

        UserStatus::create([
            'general_status_id' => $request->General_status,
            'status_name' => $request->statusName
        ]);

      return  redirect()->route('userstatuses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\UserStatus $userstatus
     * @return \Illuminate\Http\Response
     */
    public function edit(UserStatus $userstatus)
    {
       $g_statuses =  UserStatus::where('general_status_id',null)->get();
   
       $g_status = DB::table('user_statuses')->where('status_id', "=",$userstatus->general_status_id)->limit(1)->get();
      
        return view('admin.userStatuses.edit',['status'=> $userstatus,'g_statuses' => $g_statuses,'g_status' => $g_status ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\UserStatus $userstatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,UserStatus $userstatus)
    {
        $request->validate([
            'statusName' => ['required','string','max:90'],
            'generalStatus' =>['nullable','integer']
        ]);
        $userstatus->status_name = $request->statusName;
        $userstatus->general_status_id = $request->generalStatus;
        $userstatus->save();

        return redirect()->route('userstatuses.index');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  App\Models\UserStatus $userstatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserStatus $userstatus)
    {
        $userstatus->delete();

        return back();
    }
}
