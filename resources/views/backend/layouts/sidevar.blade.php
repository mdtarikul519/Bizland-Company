
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Manage User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('user.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View User</p>
                </a>
              </li>
             
            </ul>
          </li>
           
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Manage Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('profiles.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Profile</p>
                </a>
              </li>
               
              <li class="nav-item">
                <a href="{{route('profiles.passowrd.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Password change</p>
                </a>
              </li>
            </ul>
          </li>
          

         <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage logo
              <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('logo.view')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                 <p>View logo</p>
             </a>
          </li>
      </ul>
    </li>

    <li class="nav-item has-treeview ">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Sliders
        <i class="fas fa-angle-left right"></i>
        </p>
      </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{route('slider.view')}}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
           <p>View Sliders</p>
       </a>
    </li>
   </ul>
  </li>


  <li class="nav-item has-treeview ">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-copy"></i>
      <p>
        Manage About
      <i class="fas fa-angle-left right"></i>
      </p>
    </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{route('about.view')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
         <p>View About</p>
     </a>
  </li>
 </ul>
</li>


<li class="nav-item has-treeview ">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-copy"></i>
    <p>
      Manage icon
    <i class="fas fa-angle-left right"></i>
    </p>
  </a>
<ul class="nav nav-treeview">
  <li class="nav-item">
    <a href="{{route('icon.view')}}" class="nav-link">
      <i class="far fa-circle nav-icon"></i>
       <p>View icon</p>
   </a>
</li>
</ul>
</li>
</nav>
      <!-- /.sidebar-menu --> 