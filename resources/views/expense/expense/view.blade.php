@extends('layouts.app')

@section('content-header')
    <h1>
        Expenses
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Expenses</li>
    </ol>
@endsection



@section('content')
    <div class="row">
        <div class="col-xs-12">
            <!-- flash Messages -->
            @if(session('global') == 'Expense Created')
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Expense Created Successfully!</h4>
                    Expense has been created successfully.
                </div>
            @endif
            @if(session('global') == 'Expense Deleted')
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Expense Deleted Successfully!</h4>
                    Expense has been deleted successfully.
                </div>
            @endif
            @if(session('global') == 'Expense Updated')
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Expense Updated Successfully!</h4>
                    Expense has been updated successfully.
                </div>
        @endif
        <!-- /flash Messages -->
            <a type="button" class="btn btn-primary" href="/products/create">Add New Product</a>

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Available Products</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Sr. #</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($expenses))
                            @foreach($expenses as  $key=>$expense)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$expense->name}}</td>
                                    <td>{{$expense->description}}</td>
                                    <td><a href="/products/{{$expense->slug}}/edit"><i class="fa fa-fw fa-edit"></i>Edit</a>
                                        <form method="POST" action="{{route('products.destroy', ['id' => $expense->id]) }}" id="delete-product{{$expense->id}}">
                                            {{ csrf_field() }}
                                            <input name="_method" value="DELETE" type="hidden">
                                            <a href="#" onclick="document.getElementById('delete-product{{$expense->id}}').submit()"><i class="fa fa-fw fa-trash"></i> Delete</a></form></td>
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

