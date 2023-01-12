<?php

namespace App\Http\Controllers;
use App\Models\Groupe;
use App\Models\TrainingYear;
use App\Models\Brief;

use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function index()
    {
        $getAllGroup =Groupe::all();
        // $getTraningYear = $getAllGroup->task;
        foreach($getAllGroup as $groupe){
            $groupe->trainingYear;
        }
        return view('groups.index',compact('getAllGroup'));
    }
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
        $getAllGroup =Brief::find('2');
        $getTraningYear = $getAllGroup->task;
        dd($getAllGroup);
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
