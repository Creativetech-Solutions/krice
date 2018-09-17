@extends('layouts.app')

@section('content-header')
      <h1>
        Users
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
      </ol>
@endsection

  
    
@section('content')
<div class="row">
        <div class="col-xs-12">
          <!-- flash Messages -->
          @if(session('global') == 'User Created')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> User Created Successfully!</h4>
                User has been created successfully.
              </div>
            @endif
             @if(session('global') == 'User Deleted')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> User Deleted Successfully!</h4>
                User has been deleted successfully.
              </div>
            @endif
             @if(session('global') == 'User Updated')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> User Updated Successfully!</h4>
                User has been updated successfully.
              </div>
            @endif
            <!-- /flash Messages -->

          <a type="button" class="btn btn-primary"  href="/users/create">Add New User</a>

          <div class="box">
            <div class="box-header">
             
              <h3 class="box-title">Registered Users</h3>
            
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. #</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
              @foreach($all_users as $key=>$user)
                <tr>
                  <td>{{++$key}}</td>
                  <td>{{$user->first_name}} {{$user->last_name}}</td>
                  <td>{{$user->email}}</td>
                  <td>@isUserActive($user->id)
                    <span class="label label-success">Enabled</span>
                    @else
                    <span class="label label-danger">Disabled</span>.
                    @endisUserActive
                  </td>
                  <td><a href="/user/{{$user->id}}"><i class="fa fa-fw fa-edit"></i> Edit</a>  
                  <form method="POST" action="{{ route('user.destroy', ['id' => $user->id]) }}" id="delete-user{{$user->id}}">
                  {{ csrf_field() }}
                  <input name="_method" value="PUT" type="hidden">
                  <a href="#" onclick="document.getElementById('delete-user{{$user->id}}').submit()"><i class="fa fa-fw fa-trash"></i> Delete</a>
                  </form>
                  @isUserActive($user->id)
                  <form method="POST" action="{{ route('user.deactivate', ['id' => $user->id]) }}" id="deactivate-user{{$user->id}}">
                  {{ csrf_field() }}
                  <input name="_method" value="PUT" type="hidden">
                  <a href="#" onclick="document.getElementById('deactivate-user{{$user->id}}').submit()">Disable</a>
                  </form>
                  @else
                  <form method="POST" action="{{ route('user.activate', ['id' => $user->id]) }}" id="activate-user{{$user->id}}">
                  {{ csrf_field() }}
                  <input name="_method" value="PUT" type="hidden">
                  <a href="#" onclick="document.getElementById('activate-user{{$user->id}}').submit()">Enable</a>
                  </form>
                  @endisUserActive
                </td>
                </tr>
              @endforeach
                
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>Sr. #</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Action</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
  
@endsection
   
