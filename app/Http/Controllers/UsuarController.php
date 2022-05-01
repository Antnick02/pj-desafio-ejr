<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuar;

class UsuarController extends Controller
{

    public function inicial(){
        return view('Inicial');
    }

    public function verificarLogin(Request $request){

        $this->validate($request,['login'=>'required','password'=>'required'],
        ['login.required'=>'Login é obrigatório','password.required'=>'Senha é obrigatória']);

        $usuar = new Usuar();
        
        $usuar->login= $request->login;
        $usuar->senha= $request->senha;

        $usuar2 = Usuar::where("login",$usuar->login)->first();

        if($usuar2!=null){
            if($usuar2->senha == $usuar->senha){
                return redirect('/Seguinte');
            }
        }
        return redirect('/');

    }

    public function cadastrarUsuario(){
        return view('CadastroUsuario');
    }

    public function enviarCadastroUsuario(Request $request){

        $usuar = new Usuar(); 
        
        $usuar->name = $request->name; 
        $usuar->login = $request->login;
        $usuar->password = $request->password; 

        $usuar->save();

        return redirect('/');

    }

    public function paginaSeguinte(){
        return view('Seguinte');
    }
}
