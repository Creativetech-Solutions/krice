@extends('layouts.app')

@section('content-header')
      <h1>
        Categories
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Categories</li>
      </ol>
@endsection

  
    
@section('content')
<div class="row">
        <div class="col-xs-12">
          <!-- flash Messages -->
          @if(session('global') == 'Category Created')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Category Created Successfully!</h4>
                Category has been created successfully.
              </div>
            @endif
             @if(session('global') == 'Category Deleted')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Category Deleted Successfully!</h4>
                Category has been deleted successfully.
              </div>
            @endif
             @if(session('global') == 'Category Updated')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Category Updated Successfully!</h4>
                Category has been updated successfully.
              </div>
            @endif
            <!-- /flash Messages -->
          <a type="button" class="btn btn-primary" href="/categories/create">Add New Category</a>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Available Categories</h3>
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
                @if(isset($categories))
              @foreach($categories as  $key=>$category)
                <tr>
                  <td>{{++$key}}</td>
                  <td>{{$category->name}}
                  </td>
                 <td><a href="/categories/{{$category->slug}}/edit"><i class="fa fa-fw fa-edit"></i>Edit</a>  
                <form method="POST" action="{{route('categories.destroy', ['id' => $category->id]) }}" id="delete-category{{$category->id}}">
                  {{ csrf_field() }}
                  <input name="_method" value="DELETE" type="hidden">
                  <a href="#" onclick="document.getElementById('delete-category{{$category->id}}').submit()"><i class="fa fa-fw fa-trash"></i> Delete</a></form></td>
                  
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
   
