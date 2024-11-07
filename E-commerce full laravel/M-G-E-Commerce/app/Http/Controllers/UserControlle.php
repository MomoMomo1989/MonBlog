<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserControlle extends Controller
{
    //
    public function showRegister(){
        return view('user.inscription');
    }
    public function showLogin(){
        return view('user.Login');
    }
    public function storeregister(Request $request){
        $dataRegister = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:40',
            'telephone'=>'required|string|max:13',
            'password' => 'required|string|min:8|confirmed',
        ],[
            'name.required' => 'Le nom est obligatoire.',
            'email.required' => 'L’email est obligatoire.',
            'telephone.required' => 'Le telephone est obligatoire.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ]);

       $userRegister = user::create([
           'name' => $dataRegister['name'],
           'email' => $dataRegister['email'],
           'telephone' => $dataRegister['telephone'],
           'password' => Hash::make($dataRegister['password']),
           'isAdmin' => false,
       ]);
       return redirect()->route('Login')->with('success', 'Votre compte a été créé. Veuillez vous connecter.');

    }
    public function storeLogin(Request $request){
        $authentification = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);
          if (Auth::attempt($authentification)) {
            return redirect()->route('home')->with('success','Vous etes connecter');
          } else {
            return back()->withErrors([
                'email' => 'Les identifiants sont incorrects.',
            ])->withInput();
          }
    }

    public function logOut(){

        Auth::logout();
        return redirect()->route('Login')->with('success', 'Vous êtes déconnecté.');
    }
    public function home(){
        return view('user.homeClient');
    }
}
