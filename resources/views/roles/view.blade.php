@extends('layouts.app')

@section('content-header')
      <h1>
        Roles
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Roles</li>
      </ol>
@endsection

  
    
@section('content')
<div class="row">
        <div class="col-xs-12">
          <!-- flash Messages -->
          @if(session('global') == 'Role Created')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Role Created Successfully!</h4>
                Role has been created successfully.
              </div>
            @endif
             @if(session('global') == 'Role Deleted')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Role Deleted Successfully!</h4>
                Role has been deleted successfully.
              </div>
            @endif
             @if(session('global') == 'Role Updated')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Role Updated Successfully!</h4>
                Role has been updated successfully.
              </div>
            @endif
            <!-- /flash Messages -->
          <a type="button" class="btn btn-primary" href="/roles/create">Add New Role</a>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Available Roles</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. #</th>
                  <th>Title</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
              @foreach ($all_roles as  $key=>$role)
                <tr>
                  <td>{{++$key}}</td>
                  <td>{{$role->name}}
                  </td>
                 <td><a href="/role/{{$role->slug}}"><i class="fa fa-fw fa-edit"></i>Edit</a>  
                <form method="POST" action="{{ route('role.destroy', ['id' => $role->id]) }}" id="delete-role{{$role->id}}">
                  {{ csrf_field() }}
                  <input name="_method" value="PUT" type="hidden">
                  <a href="#" onclick="document.getElementById('delete-role{{$role->id}}').submit()"><i class="fa fa-fw fa-trash"></i> Delete</a></form></td>
                  
                </tr>
                @endforeach
                
                </tbody>
                <!-- <tfoot>
                <tr>
                 <th>Sr. #</th>
                  <th>Title</th>
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
   
