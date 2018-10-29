@extends('layouts.app')

@section('content-header')
      <h1>
        Areas
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li >Area</li>
         <li class="active">edit</li>
      </ol>
@endsection  
@section('content')
<div class="row">
<div class="col-md-12">
       <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Area</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="{{ route('areas.update', ['id' => $area->id]) }}" method="POST">
                {{ csrf_field() }}
                <input name="_method" value="PUT" type="hidden">
                <!-- text input -->
                <div class="form-group">
                  <label>Title </label>
                  <input type="text" value="{{$area->name}}" readonly name="name" class="form-control" placeholder="Enter Title" required>
                </div>
                <div class="form-group">
                  <label>City</label>
                  <select class="form-control" name="city" required>
                    @foreach($cities as $city)
                    <option value="{{$city->id}}" 
                      {{$area->city_id==$city->id?"selected":""}}>{{$city->name}}</option>
                    @endforeach
                  </select>
                </div>
              
                 <div class="box-footer">
                <a href="/areas" class="btn btn-default">Cancel</a>
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
   
