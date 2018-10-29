<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class UsersController extends Controller
{
    public function create(){

    	foreach(Sentinel::getRoleRepository()->all() as $value )
    	{
    		$single_role = array();
    		$single_role['id'] = $value->id;
    		$single_role['slug'] = $value->slug;
    		$single_role['name'] = $value->name;
    		$all_roles[] = $single_role;
    	}

    	return view('users.create')->with('all_roles', $all_roles);
    }

    public function post_create(Request $request){

    	$inputs = $request->all();

    	$credentials = [
    		'first_name'    => $inputs['first_name'],
    		'last_name'    => $inputs['last_name'],
		    'email'    => $inputs['email'],
		    'password' => $inputs['password'],
		];

    	$user = Sentinel::registerAndActivate($credentials);
    	foreach ($inputs['roles'] as $key => $value) {

    		$role = Sentinel::findRoleBySlug($value);
    		$role->users()->attach($user);
    	}
    	

    	$message = "User Created";

    	return redirect('/users/view')->with('global', $message);
    }

    public function view(){
    	$all_users = Sentinel::getUserRepository()->all();

        $logged_in_user  = Sentinel::getUser();
    	
    	return view('users.view')->with('all_users', $all_users)->with("logged_in_user",$logged_in_user);
    }

    public function edit($id){

        $user = Sentinel::getUserRepository()->findById($id);

        $user_roles = Sentinel::findById($id)->roles;
        $all_user_roles=array();
        foreach($user_roles as $value )
        {
            $all_user_roles[] = $value->id;
        }
        // dd($all_user_roles);
        // dd($userRoles);
        //dd($role);
         $all_roles  = Sentinel::getRoleRepository()->all();
       
        return view('users.edit')->with('user',$user)->with('user_roles', $all_user_roles)->with('all_roles', $all_roles);
    }

    public function update(Request $request, $id){

        $inputs = $request->all();

        $user = Sentinel::findById($id);


        $credentials = [
            'first_name'    => $inputs['first_name'],
            'last_name'    => $inputs['last_name'],
            'email'    => $inputs['email'],
            'password' => $inputs['password'],
        ];

        $user = Sentinel::update($user, $credentials);

        $user_roles = Sentinel::findById($id)->roles;

        foreach($user_roles as $value )
        {

            $role = Sentinel::findRoleById($value->id);

            $role->users()->detach($user);
        }

        if(isset($inputs['roles']))
        {
            foreach ($inputs['roles'] as $value) {

                $new_role = Sentinel::findRoleBySlug($value);

                $new_role->users()->attach($user);
                
            }
        }

        $message = "User Updated";

        return redirect('/users/view')->with('global', $message);
       
    }

    public function destroy($id)
    {   
        
        $user = Sentinel::findById($id);

        $user->delete();

        $message = "User Deleted";

        return redirect('/users/view')->with('global', $message);

    }

    public function activate($id)
    {

        $user = Sentinel::findById($id);
        $Activation = Sentinel::getActivationRepository();
        
        if ($Activation->exists($user))
        {
            $remove = $Activation->remove($user);
        }
        
        $new_activation = $Activation->create($user);

        $Activation->complete($user, $new_activation->code);

        return redirect('/users/view');
    }

    public function deactivate($id){
     
        $user = Sentinel::findById($id);

        $Activation = Sentinel::getActivationRepository();

        $status = $Activation->remove($user);

        return redirect('/users/view');
        
    }

}
