<aside class="main-sidebar bg-[#780C28] elevation-4 text-white flex flex-col h-screen">
  <!-- Brand Logo -->
  <a href="/maindashboard" class="brand-link text-white">
    <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">Hotel Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar flex flex-col flex-grow">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="https://i.ibb.co.com/8gg4dT68/Raiyan.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block text-white">Shahriar Naiem</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar bg-white text-gray-900" type="search" placeholder="Search"
          aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar bg-white">
            <i class="fas fa-search fa-fw text-gray-900"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2 flex-grow -ms-2">
      <ul class="nav nav-pills nav-sidebar flex-column text-white" data-widget="treeview" role="menu"
        data-accordion="false">
        <li class="nav-item">
          <a href="/maindashboard" class="nav-link text-white">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <!-- User Management -->
        <li class="nav-item">
          <a href="#" class="nav-link text-white">
            <i class="fa-solid fa-people-roof"></i>
            <p>
              Staff Management
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">2</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/adduser" class="nav-link text-white">
                <i class="fa-solid fa-user-plus"></i>
                <p>Add Staff</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/manageuser" class="nav-link text-white">
                <i class="fa-solid fa-people-roof"></i>
                <p>Manage Staff</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Room Management -->
        <li class="nav-item">
          <a href="#" class="nav-link text-white">
            <i class="fa-solid fa-bed-pulse"></i>
            <p>Room Management
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">4</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/addroom" class="nav-link text-white">
                <i class="fa-solid fa-plus"></i>
                <p>Add Room </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/roomdetails" class="nav-link text-white">
                <i class="fa-solid fa-list"></i>
                <p>Room List </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/addroomtype" class="nav-link text-white">
              <i class="fa-solid fa-plus"></i>
                <p>Add Room Type </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/addbed" class="nav-link text-white">
              <i class="fa-solid fa-bed-pulse"></i>
                <p>Add Bed Type </p>
              </a>
            </li>

          </ul>
        </li>

        <!-- Booking Management -->
        <li class="nav-item">
          <a href="#" class="nav-link text-white">
          <i class="fa-solid fa-bookmark"></i>
            <p>Booking Management
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">3</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/bookinglist" class="nav-link text-white">
              <i class="fa-solid fa-list-check"></i>
                <p>Booking List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/bookingreport" class="nav-link text-white">
              <i class="fa-solid fa-bug-slash"></i>
                <p>Booking Report </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/roomstatus" class="nav-link text-white">
              <i class="fa-solid fa-chart-simple"></i>
                <p>Room Status</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Transaction -->
        <li class="nav-item">
          <a href="/transection" class="nav-link text-white">
          <i class="fa-solid fa-money-bill-transfer"></i>
            <p>
              Transection
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white">
            <i class="fa-solid fa-broom"></i>
            <p>
              Housekeeping

            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white">
            <i class="fa-solid fa-bug"></i>
            <p>
              Report

            </p>
          </a>
        </li>


      </ul>
    </nav>


    <div class="mt-auto">
      <p class=" ">
        <a href="/" class="nav-link text-white bg-black rounded-full">
          <i class="fa-solid fa-right-from-bracket"></i> Log out
        </a>
      </p>
    </div>
  </div>
</aside>