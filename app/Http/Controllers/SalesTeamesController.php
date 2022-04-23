<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\SalesTeam;


class SalesTeamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd("ffdddsa");
        // echo "dddd";
        $salesTeamses = SalesTeam::all();
        
        return view('index',compact('salesTeamses'));
        // return view('create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salesTeames');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'telephone' => 'required',
            'current_route' => 'required',

        ]);
        $show = SalesTeam::create($validatedData);
   
        return redirect('/salesTeames')->with('success', 'Sales Teames added successfully saved');

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $salesTeam = SalesTeam::findOrFail($id);

        return view('edit', compact('salesTeam'));
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
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'telephone' => 'required',
            'current_route' => 'required',
        ]);
        SalesTeam::whereId($id)->update($validatedData);

        return redirect('/salesTeames')->with('success', 'Sales Teames Updated successfully saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //to do record fro manage deteded status
        $salesTeames = SalesTeam::findOrFail($id);
        $salesTeames->delete();

        return redirect('/salesTeames')->with('success', 'SalesTeam Data is successfully deleted');
    }
}
