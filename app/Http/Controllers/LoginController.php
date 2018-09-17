<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
class LoginController extends Controller
{
    public function login(){
    	return view('login.login');
    }

    public function postlogin(Request $request){
        try{
            	Sentinel::authenticate($request->all()); //authenticateAndRemember
            	
                $user = Sentinel::check();
                
        }catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e) {

                $errors = 'Account not activated.';
                // dd($errors);
                return redirect('/login')->with('global', $errors);

            }catch (\Cartalyst\Sentinel\Checkpoints\checkThrottlingException $e){

                 $errors = 'Suspicious Activity';
                // dd($errors);
                return redirect('/login')->with('global', $errors);

            }

                if($user)
                {
                    return redirect('/');
                }else
                {
                    $errors = 'Login failed';
                    //invalid credentials
                    return redirect('/login')->with('global', $errors);;
                }
    }

    public function logout(){

    	Sentinel::logout();
    	return redirect('/login');
    }
}
