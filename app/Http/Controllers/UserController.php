<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * show form to user to register or login
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return response()->json($user,200);
    }

    /**
     * function that help user login on notebook app
     *
     * @return json response
     */

    public function login(Request $request){
        $this->validation($request);
        
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],true)){
            return response()->json(Auth::user(),200);
        }else{
            return response()->json(['error'=>'Erreur de Connexion email/mot de passe incorrect'],401);
        }
    }

    public function register(Request $request){
        $this->validation($request);

        $user = User::where('email',$request->email)->first();

        if(isset($user->id)){
            return response()->json(['error'=>'email deja utilisé'],401);   
        }else{
            
            $user = new User();

            $user->email = $request->email;
            $suer->password = bcrypt($request->password);
            $user->save();
            
            Auth::login($user);

            return response()->json($user,200);

        }
        
    }

    public function validation($request){
        $request->validate([
            'email'       => 'required|max:255|unique:users',
            'password' => 'required',
        ]);
    }

    public function logout(){
            
    }

}
