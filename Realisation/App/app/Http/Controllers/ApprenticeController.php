<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;
use App\Exports\ExportApprentice;
use App\Imports\ImportApprentice;
use Maatwebsite\Excel\Facades\Excel;

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
        $apprentice->firstName = $request->firstName;
        $apprentice->lastName = $request->lastName;
        $apprentice->email = $request->email;
        $apprentice->phoneNumber = $request->phoneNumber;
        $apprentice->adresse = $request->address;
        $apprentice->imageURL = $request->imageURL;
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

    // public function importView(){
    //     return view('apprentices.import');
    // }

    public function import(Request $request){
        Excel::import(new ImportApprentice, $request->importFile);
        return redirect()->route('apprentices.index');
    }

    public function exportApprentices(Request $request){
        return Excel::download(new ExportApprentice, 'apprentices.xlsx');
    }
}
