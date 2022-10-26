<div class="left-side-menu">

  <div class="h-100" data-simplebar>

    <!-- User box -->
    <div class="user-box text-center">
      <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
      <div class="dropdown">
        <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
          data-bs-toggle="dropdown">Geneva Kennedy</a>
        <div class="dropdown-menu user-pro-dropdown">

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="fe-user me-1"></i>
            <span>My Account</span>
          </a>

          <!-- item-->
          <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="fe-log-out me-1"></i>
            <span>Logout</span>
          </a>

        </div>
      </div>
      <p class="text-muted">Admin Head</p>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">

      <ul id="side-menu">

        <li class="menu-title">Navigation</li>

        <li>
          <a href="dashboard.php">
            <i data-feather="airplay"></i>
            <span> Dashboard </span>
          </a>
        </li>

        <li>
          <a href="form.php">
            <i data-feather="message-square"></i>
            <span> Form </span>
          </a>
        </li>

        <li>
          <a href="data.php">
            <i data-feather="message-square"></i>
            <span> Data </span>
          </a>
        </li>
        
        <li>
          <a href="#sidebarTasks" data-bs-toggle="collapse">
            <i data-feather="clipboard"></i>
            <span> Tasks </span>
            <span class="menu-arrow"></span>
          </a>
          <div class="collapse" id="sidebarTasks">
            <ul class="nav-second-level">
              <li>
                <a href="task-list.html">List</a>
              </li>
              <li>
                <a href="task-details.html">Details</a>
              </li>
              <li>
                <a href="task-kanban-board.html">Kanban Board</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>

    </div>
  </div>
  <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->