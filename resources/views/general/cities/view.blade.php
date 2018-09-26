@extends('layouts.app')

@section('content-header')
      <h1>
        Cities
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Cities</li>
      </ol>
@endsection

  
    
@section('content')
<div class="row">
        <div class="col-xs-12">
          <!-- flash Messages -->
          @if(session('global') == 'City Created')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> City Added Successfully!</h4>
                City has been created successfully.
              </div>
            @endif
             @if(session('global') == 'City Deleted')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> City Deleted Successfully!</h4>
                City has been deleted successfully.
              </div>
            @endif
             @if(session('global') == 'City Updated')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> City Updated Successfully!</h4>
                City has been updated successfully.
              </div>
            @endif
            <!-- /flash Messages -->
          <a type="button" class="btn btn-primary" href="/cities/create">Add New City</a>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Available Cities</h3>
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
                @if(isset($cities))
              @foreach($cities as  $key=>$city)
                <tr>
                  <td>{{++$key}}</td>
                  <td>{{$city->name}}
                  </td>
                 <td><a href="/cities/{{$city->slug}}/edit"><i class="fa fa-fw fa-edit"></i>Edit</a>  
                <form method="POST" action="{{route('cities.destroy', ['id' => $city->id]) }}" id="delete-city{{$city->id}}">
                  {{ csrf_field() }}
                  <input name="_method" value="DELETE" type="hidden">
                  <a href="#" onclick="document.getElementById('delete-city{{$city->id}}').submit()"><i class="fa fa-fw fa-trash"></i> Delete</a></form></td>
                  
                </tr>
                @endforeach
                @endif
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
  
@endsection
   
