@extends('layouts.app')

@section('content-header')
    <h1>
        Products
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Product</li>
        <li class="active">Create</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Product</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form" action="/products" method="POST">
                    {{ csrf_field() }}

                    <!-- text input -->
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                            <label>Description</label>
                            <input type="text" name="description" class="form-control" placeholder="Enter Description" required>
                        </div>
                        <div class="form-group">
                            <label>Catagories</label>
                            <select class="form-control" name="categories">
                                <option selected="selected">Select product category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="box-footer">
                            <a href="/categories/view" class="btn btn-default">Cancel</a>
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
   
