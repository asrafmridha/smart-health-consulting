<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: white">
    
  <h1 style="background-color: darkgreen;font-size:30px; margin-top:20px">Admin Panel</h1>
    <ul class="nav">
      
     
            
            
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
              <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-primary"></i>
                  </div>
                </div>
                
          </div>

        
     
     
      <li  class="nav-item menu-items {{Request::is('adddoctorview') ? 'active': ''}}">
        <a class="nav-link" href="{{url('adddoctorview')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Add Doctors</span>
        </a>
      </li>

      <li class="nav-item menu-items {{Request::is('adminappoinmenttable') ? 'active': ''}}">
        <a class="nav-link" href="{{url('adminappoinmenttable')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Appoinment Status</span>
        </a>
      </li>

      <li class="nav-item menu-items   {{Request::is('alldoctorview') ? 'active': ''}}">
        <a class="nav-link" href="{{url('alldoctorview')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">All Doctor</span>
        </a>
      </li>
    </ul>
  </nav>