@extends('layouts.app')

@section('content-header')
      <h1>
        Roles
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li >Roles</li>
         <li class="active">edit</li>
      </ol>
@endsection

  
    
@section('content')
<div class="row">
<div class="col-md-12">
       <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Role</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="{{ route('role.update', ['id' => $role->id]) }}" method="POST">
                {{ csrf_field() }}
                <input name="_method" value="PUT" type="hidden">
                <!-- text input -->
                <div class="form-group">
                  <label>Title </label>
                  <input type="text" readonly value="{{$role->name}}" class="form-control" placeholder="Enter Title" required>
                </div>
               
                <!-- textarea -->
                <!-- <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div> -->
                <h3>Permissions</h3>
                <div class="row">
                  <div class="col-xs-3">
                    <h4><strong>Customer</strong></h4>
                    <!-- checkbox -->
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="customer.view" @if(in_array('customer.view', $permissions)) checked @endif>
                         View
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="customer.add" @if(in_array('customer.add', $permissions)) checked @endif>
                          Add
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="customer.update" @if(in_array('customer.update', $permissions)) checked @endif>
                          Edit
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="customer.delete" @if(in_array('customer.delete', $permissions)) checked @endif>
                          delete
                        </label>
                      </div>
                    </div>
                </div>
                <div class="col-xs-3">
                <h4><strong>Products</strong></h4>
                    <!-- checkbox -->
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="product.view" @if(in_array('product.view', $permissions)) checked @endif>
                         View
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="product.add" @if(in_array('product.add', $permissions)) checked @endif>
                          Add
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="product.edit" @if(in_array('product.edit', $permissions)) checked @endif>
                          Edit
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="product.delete" @if(in_array('product.delete', $permissions)) checked @endif>
                          delete
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-3">
                  <h4><strong>Suppliers</strong></h4>
                    <!-- checkbox -->
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="supplier.view" @if(in_array('supplier.view', $permissions)) checked @endif>
                         View
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="supplier.add" @if(in_array('supplier.add', $permissions)) checked @endif>
                          Add
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="supplier.edit" @if(in_array('supplier.edit', $permissions)) checked @endif>
                          Edit
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="supplier.delete" @if(in_array('supplier.delete', $permissions)) checked @endif>
                          delete
                        </label>
                      </div>
                    </div>
                  </div>
                <div class="col-xs-3">
                  <h4><strong>Categories</strong></h4>
                      <!-- checkbox -->
                      <div class="form-group">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="permission[]" value="category.view" @if(in_array('category.view', $permissions)) checked @endif>
                           View
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="permission[]" value="category.add" @if(in_array('category.add', $permissions)) checked @endif>
                            Add
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="permission[]" value="category.edit" @if(in_array('category.edit', $permissions)) checked @endif>
                            Edit
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="permission[]" value="category.delete" @if(in_array('category.delete', $permissions)) checked @endif>
                            delete
                          </label>
                        </div>
                      </div>
                    </div>
                </div>
                 <div class="box-footer">
                <a href="/roles/view" class="btn btn-default">Cancel</a>
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
   
