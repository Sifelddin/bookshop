<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departements = Department::all();
        return view('admin.departements.index',compact('departements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.departements.create');
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
            "dep_name" => ["string","required","max:90"]
        ]);

        Department::create([
            'dep_name' => $request->dep_name
        ]);

        return redirect()->route('departements.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Department $departement
     * @return \Illuminate\Http\Response
     */
    public function show(Department $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Department $departement
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $departement)
    {

        return view('admin.departements.edit',compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Department $departement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Department $departement)
    {
        $request->validate([
            'dep_name' => ['string','required','max:90']
        ]);
        $departement->dep_name = $request->dep_name;
        $departement->save();

        return redirect()->route('departements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Department $departement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $departement)
    {
        $departement->delete();

        return redirect()->back();
    }
}
