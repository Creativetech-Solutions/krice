@extends('layouts.app')

@section('content-header')
      <h1>
        Suppliers
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li >Suppliers</li>
         <li class="active">Create</li>
      </ol>
@endsection

  
    
@section('content')
<div class="row">
<div class="col-md-12">
       <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Create Suppliers</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="/suppliers/create" method="POST">
                {{ csrf_field() }}

                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="address" class="form-control" placeholder="Enter Address" required>
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Contact</label>
                  <input type="text" name="contact" class="form-control" placeholder="Enter Contact" required>
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Description</label>
                  <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Manager Name</label>
                  <input type="text" name="manager_name" class="form-control" placeholder="Enter Name" required>
                </div>
                <!-- text input -->
                <div class="form-group">
                  <label>Manager Contact</label>
                  <input type="text" name="manager_contact" class="form-control" placeholder="Enter Contact" required>
                </div>
                <div class="form-group">
                  <label>Area</label>
                  <select class="form-control" name="area" required>
                    @foreach($areas as $area)
                    <option value="{{$area->id}}">{{$area->name}}</option>
                    @endforeach
                  </select>
                </div>
               
                 <div class="box-footer">
                <a href="/suppliers/view" class="btn btn-default">Cancel</a>
                <input type="submit" value="Submit" class="btn btn-info pull-right">
              </div>
              

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
  
@endsection
   
