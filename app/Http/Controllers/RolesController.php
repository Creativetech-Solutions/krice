<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
class RolesController extends Controller
{
    
    public function create(){

    	return view('roles.create');
    }

    public function post_create(Request $request){

    	$inputs = $request->all();
    	
    	$role = Sentinel::getRoleRepository()->createModel()->create([
			    'name' => $inputs['name'],
			    'slug' => str_slug($inputs['name']),
			]);
    	

    	$role = Sentinel::findRoleById($role->id);

    	$permission_array = array();
    	if(isset($inputs['permission'])) {

	    	foreach ($inputs['permission'] as $key => $value) {

	    		$permission_array[$value] = true;    		
	    	}
	   
	    	$role->permissions = $permission_array;
	    
			$role->save();
		}

         $message = "Role Created";

		return redirect('/roles/view')->with('global', $message);
    }

    public function view(){

    	$all_roles = Sentinel::getRoleRepository()->all();
    	
    	return view('roles.view')->with('all_roles',$all_roles);
    }

    public function edit($slug){

    	$role = Sentinel::getRoleRepository()->findBySlug($slug);

    	$permissions = array();

    	foreach ($role->permissions as $key => $value) {
    		$permissions[] = $key;
    	}

    	//dd($role);
    	return view('roles.edit')->with('role',$role)->with('permissions',$permissions);
    }

    public function update(Request $request, $id){
    	$role = Sentinel::getRoleRepository()->findById($id);
    	// dd($request->all());
    	//dd($role->permissions);
    	$inputs = $request->all();
    	foreach ($role->permissions as $key => $value) {
    		$role->removePermission($key)->save();
    	}
    	
    	foreach ($inputs['permission'] as $key => $value) {
    		$role->addPermission($value)->save();
    	}

        $message = "Role Updated";

    	return redirect('/roles/view')->with('global', $message);

    }

    public function destroy($id)
    {	
    	$role = Sentinel::findRoleById($id);


        $users = $role->users()->with('roles')->get();

        //can not delete role if user exists for this role
        dd($users->count());
        if($users->count()>0)
        {
            dd("users found");
        }else
        {
            dd("no user");
        }

        dd($users);

		$role->delete();

        $message = "Role Deleted";

		return redirect('/roles/view')->with('global', $message);

    }
}
