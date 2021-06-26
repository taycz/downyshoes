<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item" >
                    <a href="/admin/wellcome" class="nav-link">
                    <i class="fas fa-door-open"></i>
                        <p>
                            Wellcome
                        </p>
                    </a>
                </li>
                <!-- Customer Manager -->
                <li class="nav-item ">
                    <a href="/admin#" class="nav-link">
                    <i class="fas fa-user-tie"></i>
                        <p>
                            Customer Manager
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/customer" class="nav-link">
                            <i class="fas fa-user-plus"></i>
                                <p>
                                    Add Customer
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/customerList')}}" class="nav-link">
                            <i class="fas fa-address-card"></i>
                                <p>
                                    List Customer
                                </p>
                            </a>
                        </li>

                    </ul>
                    <!-- //Customer Manager -->
                    <!-- Product Manager -->
                <li class="nav-item ">
                    <a href="/admin#" class="nav-link">
                    <i class="fab fa-product-hunt"></i>
                        <p>
                            Product Manager
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/product" class="nav-link">
                            <i class="fas fa-plus-circle"></i>
                                <p>
                                    Add Product
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/productList" class="nav-link">
                            <i class="far fa-list-alt"></i>
                                <p>
                                    List Product
                                </p>
                            </a>
                        </li>
                    </ul>
                    <!-- //Customer Manager -->
                    <!-- Bill Manager -->
                <li class="nav-item ">
                    <a href="/admin#" class="nav-link">
                    <i class="fas fa-file-invoice-dollar"></i>
                        <p>
                            Bill Manager
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/adminbill" class="nav-link">
                                <i class="fas fa-users"></i>
                                <p>
                                    Add Bill
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/adminbillList" class="nav-link">
                            <i class="fas fa-clipboard-list"></i>
                                <p>
                                    List Bill
                                </p>
                            </a>
                        </li>
                    </ul>
                    <!-- //Customer Manager -->
                    <!-- User Manager -->
                    <li class="nav-item">
                    <a href="/admin/users" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>
                        User Manager
                        </p>
                    </a>
                </li>
                    <!-- //User Manager -->
                    <!-- Banner manager -->
                    <li class="nav-item ">
                    <a href="/admin#" class="nav-link">
                    <i class="fas fa-user-tie"></i>
                        <p>
                            Banner Manager
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/customer" class="nav-link">
                            <i class="fas fa-user-plus"></i>
                                <p>
                                    Add Banner Page
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/customerList')}}" class="nav-link">
                            <i class="fas fa-address-card"></i>
                                <p>
                                    List Banner Page
                                </p>
                            </a>
                        </li>
                         <!-- banner Shop -->
                         <li class="nav-item">
                            <a href="{{url('admin/customerList')}}" class="nav-link">
                            <i class="fas fa-address-card"></i>
                                <p>
                                    Add Banner Shop
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/customerList')}}" class="nav-link">
                            <i class="fas fa-address-card"></i>
                                <p>
                                    List Banner Shop
                                </p>
                            </a>
                        </li>
                    </ul>
                    <!-- // -->
                    <!-- log out -->
                <li class="nav-item">
                    <a href="/logout" class="nav-link">
                    <i class="fas fa-sign-out-alt"></i>
                        <p>
                            Log Out
                        </p>
                    </a>
                </li>
        </nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>