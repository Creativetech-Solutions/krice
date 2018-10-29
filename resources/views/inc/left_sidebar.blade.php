<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
     <!--  <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ (Request::is('users/view') || Request::is('users/create') || Request::is('roles/view') || Request::is('roles/create')) ? 'active treeview' : 'treeview' }}">
          <a href="#">
            <i class="fa fa-users"></i> <span>User Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i> Users</a></li>
            <li class="{{ (Request::is('roles/view') || Request::is('roles/create') )? 'active' : '' }}"><a href="/roles/view"><i class="fa fa-circle-o"></i> Roles</a></li>
          </ul>
        </li>
        <li class="{{ (Request::is('categories') || Request::is('categories/create') || Request::is('categories/*/edit')) ? 'active treeview' : 'treeview' }}">
          <a href="#">
            <i class="fa fa-sitemap"></i> <span>Catalog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::is('products') || Request::is('products/create')) ? 'active' : '' }}"><a href="/products"><i class="fa fa-circle-o"></i> Manage Products</a></li>
            <li class="{{ (Request::is('categories') || Request::is('categories/create') || Request::is('categories/*/edit'))? 'active' : '' }}"><a href="/categories"><i class="fa fa-circle-o"></i> Manage Categories</a></li>
            <li class="{{ (Request::is('stock/view'))? 'active' : '' }}"><a href="/stock/view"><i class="fa fa-circle-o"></i> Stock</a></li>
            <li class="{{ (Request::is('batch/view'))? 'active' : '' }}"><a href="/batch/view"><i class="fa fa-circle-o"></i> Products Batch/Version</a></li>
          </ul>
        </li>
        <li class="{{ (Request::is('cities') || Request::is('cities/create') || Request::is('areas') || Request::is('areas/create') || Request::is('areas/*/edit') || Request::is('cities/*/edit')) ? 'active treeview' : 'treeview' }}">
          <a href="#">
            <i class="fa fa-gear"></i> <span>General</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::is('cities') || Request::is('cities/create')|| Request::is('cities/*/edit'))  ? 'active' : '' }}"><a href="/cities"><i class="fa fa-circle-o"></i> Manage Cities</a></li>
            <li class="{{ (Request::is('areas') || Request::is('areas/create') || Request::is('areas/*/edit')) ? 'active' : '' }}"><a href="/areas"><i class="fa fa-circle-o"></i> Manage Areas</a></li>
          </ul>
        </li>
        @canViewCustomer 
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Customers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::is('customers/view') || Request::is('customers/create')) ? 'active' : '' }}"><a href="/customers"><i class="fa fa-circle-o"></i> Manage Customers</a></li>
            <li class="{{ (Request::is('customers/payment/view')) ? 'active' : '' }}"><a href="/customers/payment/view"><i class="fa fa-circle-o"></i> Manage Payments</a></li>
          </ul>
        </li>
       @endcanViewCustomer 
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-industry"></i> <span>Suppliers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::is('suppliers/view') || Request::is('suppliers/create')) ? 'active' : '' }}"><a href="/suppliers/view"><i class="fa fa-circle-o"></i> Manage Suppliers</a></li>
            <li class="{{ (Request::is('suppliers/view') || Request::is('suppliers/create')) ? 'active' : '' }}"><a href="/suppliers/view"><i class="fa fa-circle-o"></i> Manage Payments</a></li>
          </ul>
        </li>
         <li class=" treeview">
          <a href="#">
            <i class="fa fa-list"></i> <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Sale Order</a></li>
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Sale Order Return</a></li>
           <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Purchase Order</a></li>
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Purchase Order Return</a></li>
          </ul>
        </li>
         <li class=" treeview">
          <a href="#">
            <i class="fa fa-dollar"></i> <span>Expenses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::is('expenses') || Request::is('users/create')) ? 'active' : '' }}"><a href="/expenses"><i class="fa fa-circle-o"></i>Expense</a></li>
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Expense Type</a></li>
           
          </ul>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-bank"></i> <span>Banks</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Manage Banks</a></li>
           <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Deposit</a></li>
          </ul>
        </li>
         <li class=" treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Investors</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Manage Investors</a></li>
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Investors Data</a></li>
           <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Withdraw Profit</a></li>
          </ul>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i> <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Sales Reports</a></li>
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Purchase Reports</a></li>
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Cash Report</a></li>
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Bank Statements</a></li>
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Accounts Payables</a></li>
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Accounts Recievables</a></li>
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Expense Ledger</a></li>
            
          </ul>
        </li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Logs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Login Logs</a></li>
            <li class="{{ (Request::is('users/view') || Request::is('users/create')) ? 'active' : '' }}"><a href="/users/view"><i class="fa fa-circle-o"></i>Activity Logs</a></li>
           
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>