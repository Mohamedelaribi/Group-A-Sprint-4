<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;
use App\Models\ImportApprentice;
use DB;

class ApprenticeController extends Controller
{

    public function index()
    {

        $apprentices = Apprentice::paginate(5);
        return view('apprentices.index', compact('apprentices'));
    }

    public function create(Request $request)
    {

        return view('apprentices.create');

    }

    public function store(Request $request)
    {

        $apprentice = new Apprentice();
        $apprentice->name = $request->name;
        $apprentice->save();
        return redirect()->route('apprentices.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $apprentice = Apprentice::where('id', $id)->first();
        return view('apprentices.edit', compact('apprentice'));
    }



    public function update(Request $request, $id)
    {

        $apprentice = Apprentice::where('id', $id)->first();
        $apprentice->firstName = $request->newFirstName;
        $apprentice->lastName = $request->newLastName;
        $apprentice->email = $request->newEmail;
        $apprentice->phoneNumber = $request->newPhoneNumber;
        $apprentice->adresse = $request->newAddress;
        $apprentice->save();
        return redirect()->route('apprentices.index');
    }



    public function destroy($id)
    {

        $apprentice = Apprentice::find($id);
        $apprentice->delete();
        return redirect()->route('apprentices.index');
    }

    public function importView(Request $request){

        return view('importfile');
    } 

    public function import(Resquet $request){
        Excel::import(new ImportApprentice, $request->file('file')->store('files'));
        return redirect()->back();
    }


    public function exportApprentice(Request $request){
        return Excel::download(new ExportApprentice,'apprentices.xlsx');
}
}