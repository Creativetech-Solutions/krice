@extends('layouts.app')

@section('content-header')
      <h1>
        Roles
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li >Roles</li>
         <li class="active">Create</li>
      </ol>
@endsection

  
    
@section('content')
<div class="row">
<div class="col-md-12">
       <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Create Roles</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="/roles/create" method="POST">
                {{ csrf_field() }}

                <!-- text input -->
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Title" required>
                </div>
            

                <!-- textarea -->
                <!-- <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div> -->
                <div class="row">
                  <div class="col-xs-3">
                    <h4><strong>Customer</strong></h4>
                    <!-- checkbox -->
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="customer.view">
                         View
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="customer.add">
                          Add
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="customer.update">
                          Edit
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="customer.delete">
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
                          <input type="checkbox" name="permission[]" value="product.view">
                         View
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="product.add">
                          Add
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="product.edit">
                          Edit
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="product.delete">
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
                          <input type="checkbox" name="permission[]" value="supplier.view">
                         View
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="supplier.add">
                          Add
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="supplier.edit">
                          Edit
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="supplier.delete">
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
                            <input type="checkbox" name="permission[]" value="category.view">
                           View
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="permission[]" value="category.add">
                            Add
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="permission[]" value="category.edit">
                            Edit
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="permission[]" value="category.delete">
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
   
