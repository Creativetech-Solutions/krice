@extends('layouts.app')

@section('content-header')
      <h1>
        Suppliers
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li >Suppliers</li>
      </ol>
@endsection


@section('content')
<div class="row">
        <div class="col-xs-12">
          <!-- flash Messages -->
          @if(session('global') == 'Supplier Created')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Supplier Created Successfully!</h4>
                Supplier has been created successfully.
              </div>
            @endif
             @if(session('global') == 'Supplier Deleted')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Supplier Deleted Successfully!</h4>
                Supplier has been deleted successfully.
              </div>
            @endif
             @if(session('global') == 'Supplier Updated')
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Supplier Updated Successfully!</h4>
                Supplier has been updated successfully.
              </div>
            @endif
            <!-- /flash Messages -->
          <a type="button" class="btn btn-primary" href="/suppliers/create">Add New Supplier</a>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Available Suppliers</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. #</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Contact</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($suppliers))
              @foreach($suppliers as  $key=>$supplier)
                <tr>
                  <td>{{++$key}}</td>
                  <td>{{$supplier->name}}</td>
                  <td>{{$supplier->address}}</td>
                  <td>{{$supplier->contact}}</td> 
                  <td><a href="/suppliers/{{$supplier->id}}/edit"><i class="fa fa-fw fa-edit"></i>Edit</a>  
                <form method="POST" action="{{ route('supplier.destroy', ['id' => $supplier->id]) }}" id="delete-supplier{{$supplier->id}}">
                  {{ csrf_field() }}
                  <input name="_method" value="DELETE" type="hidden">
                  <a href="#" onclick="document.getElementById('delete-supplier{{$supplier->id}}').submit()"><i class="fa fa-fw fa-trash"></i> Delete</a></form>
                </td>
                  
                </tr>
                @endforeach
                @endif
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