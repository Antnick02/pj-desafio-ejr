<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EcompJrMember;

class EcompJrMemberController extends Controller
{
    public function cadastroMembro(){
        return view('CadastroMembro'); 
    }

    public function cadastrarMembro(Request $request){

        $ecompJrMember = new EcompJrMEmber(); 

        $ecompJrMember->name = $request->name; 
        $ecompJrMember->role = $request->role; 

        $ecompJrMember->save(); 

        return redirect('/Seguinte');
    }

    public function listarMembros(){ 
        
        $ecompJrMembers = EcompJrMember::all();

        return view('listarMembros', ['ecompJrMembers'=> $ecompJrMembers ]);
    }

    public function buscaMembro(){
        return view('BuscaMembro', ['ecompJrMembers'=>null]);
    }

    public function buscarMembro(Request $request){

        $ecompJrMembers = EcompJrMember::where("name",$request->name)->get();

        return view('BuscaMembro', ['ecompJrMembers'=> $ecompJrMembers]);
    }
}
