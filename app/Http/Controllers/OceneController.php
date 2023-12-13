<?php

namespace App\Http\Controllers;

use App\Models\Ocene;
use Illuminate\Http\Request;

class OceneController extends Controller
{
    public function addGrade(Request $request){
        $request->validate([
            'predmet'=>'string|required',
            'ocena'=>'int|required|min:1|max:5',
            'profesor'=>'string|required'
        ]);

        Ocene::create([
            'predmet'=>$request->get('predmet'),
            'ocena'=>$request->get('ocena'),
            'profesor'=>$request->get('profesor')
        ]);

        return redirect('/');
    }
}
