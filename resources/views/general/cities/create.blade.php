@extends('layouts.app')

@section('content-header')
      <h1>
        Cities
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li >City</li>
         <li class="active">Create</li>
      </ol>
@endsection

  
    
@section('content')
<div class="row">
<div class="col-md-12">
       <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Add City</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="/cities" method="POST">
                {{ csrf_field() }}

                <!-- text input -->
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Title" required>
                </div>
                 <div class="box-footer">
                <a href="/cities" class="btn btn-default">Cancel</a>
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
   
