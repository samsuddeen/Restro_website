<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href=""></a>

      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">

                <span class=""></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal">{{ auth()->user()->name }}</h5>
                <span>Project Manager</span>
              </div>
            </div>

        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('/') }}">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Website</span>
          </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-chart-bar"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('setting.index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">System Setting</span>
            </a>
          </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#services-dropdown" aria-expanded="false" aria-controls="services-dropdown">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Services</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="services-dropdown">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ route('service') }}">Add Services</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('service.index') }}">Manage Services</a></li>

            </ul>
          </div>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#items-dropdown" aria-expanded="false" aria-controls="items-dropdown">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">Items</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="items-dropdown">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ route('item') }}">Add Items</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('item.index') }}">Manage Items</a></li>

            </ul>
          </div>
        </li>


        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#customers-dropdown" aria-expanded="false" aria-controls="customers-dropdown">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Customer</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="customers-dropdown">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('customer') }}">Add Customer</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('customer.index') }}">Manage Customer</a></li>

              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#blog-dropdown" aria-expanded="false" aria-controls="blog-dropdown">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Blogs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="blog-dropdown">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('blog') }}">Add Blogs</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('blog.index') }}">Manage Blogs</a></li>

              </ul>
            </div>
          </li>




        <li class="nav-item menu-items">
          <a class="nav-link"  href="{{ route('order.index') }}">
            <span class="menu-icon">
              <i class="mdi mdi-file-document-box"></i>
            </span>
            <span class="menu-title">Reservation List</span>
         </a>
      </li>


    </nav>
