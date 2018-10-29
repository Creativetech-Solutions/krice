@extends('layouts.app')

@section('content-header')
    <h1>
        Products
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Products</li>
        <li class="active">edit</li>
    </ol>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Product</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form" action="{{ route('products.update', ['id' => $product->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <input name="_method" value="PUT" type="hidden">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{$product->name}}">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control"
                                   value="{{$product->description}}">
                        </div>
                        <div class="form-group">
                            <label>Catagories</label>
                            <select class="form-control" name="categories">
                                @foreach($categories as $key => $category)
                                    <option value="{{$category->id}}"{{ $category->id == $product->category_id ? 'selected': ''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="box-footer">
                            <a class="btn btn-default btn-close" href="{{url()->previous()}}">Cancel</a>
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
   
