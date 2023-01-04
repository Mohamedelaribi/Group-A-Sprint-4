<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;
use DB;

class PromotionsController extends Controller
{
 
    public function index()
    {
        $apprentices = DB::table('apprentices')->paginate(5);
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
}
