@extends('layouts.app')

@section('content-header')
      <h1>
        Users
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li >Users</li>
         <li class="active">Edit</li>
      </ol>
@endsection

  
    
@section('content')
<div class="row">
<div class="col-md-12">
       <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="POST" action="{{ route('user.update', ['id' => $user->id]) }}">
                {{ csrf_field() }}
                 <input name="_method" value="PUT" type="hidden">
                <!-- text input -->
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Email" value="{{$user->email}}" required>
                </div>
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{$user->first_name}}" required>
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Last name" value="{{$user->last_name}}" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" name="password_confirmation" class="form-control" required >
                </div>

               
                
                <h4><strong>Roles</strong></h4>
                <!-- checkbox -->
                <div class="form-group">
                  @foreach($all_roles as $role)
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="roles[]" value="{{$role->slug}}" @if(in_array($role->id, $user_roles)) checked @endif>
                     {{$role->name}}
                    </label>
                  </div>
                  @endforeach

                </div>

                 <div class="box-footer">
                <a href="/users/view" class="btn btn-default">Cancel</a>
                <input type="submit" class="btn btn-info pull-right" value="Submit">
              </div>
            
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
  
@endsection
   
