<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;
use App\Models\ImportApprentice;
use DB;

class PromotionsController extends Controller
{
 
    public function index()
    {
<<<<<<< HEAD:Realisation/App/app/Http/Controllers/ApprenticeController.php

        $apprentices = Apprentice::paginate(5);
=======
        $apprentices = DB::table('apprentices')->paginate(5);
>>>>>>> parent of a40cdc4 (crud and localization):Realisation/App/app/Http/Controllers/PromotionsController.php
        return view('apprentices.index', compact('apprentices'));
    }

    public function create(Request $request)
    {
        
        return view('apprentices.create');

    }

    public function store(Request $request)
    {
        
        $apprentices = new Apprentice();
        $apprentices->name = $request->name;
        $apprentices->save();
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
        $apprentice->firstName = $request->firstName;
        $apprentice->lastName = $request->lastName;
        $apprentice->email = $request->email;
        $apprentice->phoneNumber = $request->phoneNumber;
        $apprentice->adresse = $request->adresse;
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