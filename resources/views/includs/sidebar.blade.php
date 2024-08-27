<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dashboard </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            
            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.products.index') }}">
            <i class="fas fa-fw fa-cog"></i>
                <span>All Products</span> 
            
            </a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.categories.index') }}">
            <i class="fas fa-fw fa-cog"></i>
                <span>All categories</span> 
            
            </a>
            </li>


            <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.users.index') }}">
            <i class="fas fa-fw fa-cog"></i>
                <span>All users</span> 
            
            </a>
            </li>


            <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.messages.index') }}">
            <i class="fas fa-fw fa-cog"></i>
                <span>All massages</span> 
            
            </a>
            </li>

          

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

      

        

        </ul>