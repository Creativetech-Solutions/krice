@extends('layouts.app')

@section('content-header')
      <h1>
        Areas
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Areas</li>
      </ol>
@endsection

  
    
@section('content')
<div class="row">
        <div class="col-xs-12">
          <!-- flash Messages -->
          @if(session('global') == 'Area Created')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Area Added Successfully!</h4>
                Area has been created successfully.
              </div>
            @endif
             @if(session('global') == 'Area Deleted')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Area Deleted Successfully!</h4>
                Area has been deleted successfully.
              </div>
            @endif
             @if(session('global') == 'Area Updated')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Area Updated Successfully!</h4>
                Area has been updated successfully.
              </div>
            @endif
            <!-- /flash Messages -->
          <a type="button" class="btn btn-primary" href="/areas/create">Add New Area</a>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Available Areas</h3>
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
                @if(isset($areas))
              @foreach($areas as  $key=>$area)
                <tr>
                  <td>{{++$key}}</td>
                  <td>{{$area->name}}
                  </td>
                 <td><a href="/areas/{{$area->slug}}/edit"><i class="fa fa-fw fa-edit"></i>Edit</a>  
                <form method="POST" action="{{route('areas.destroy', ['id' => $area->id]) }}" id="delete-area{{$area->id}}">
                  {{ csrf_field() }}
                  <input name="_method" value="DELETE" type="hidden">
                  <a href="#" onclick="document.getElementById('delete-area{{$area->id}}').submit()"><i class="fa fa-fw fa-trash"></i> Delete</a></form></td>
                  
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
   
