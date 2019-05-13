<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <li class="user-pro">
          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <img src="{{ asset('assets/images/users/1.jpg') }}" alt="user-img" class="img-circle">
            <span class="hide-menu">{{ Auth::user()->name }}</span>
          </a>
          <ul aria-expanded="false" class="collapse">
            <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
            <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
            <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
            <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off"></i>
                Keluar
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>

        <li class="nav-small-caps" style="font-size:18px">--- I C T ---- </li>


        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
          <ul aria-expanded="false" class="collapse">
            <li><a href="{{ asset('Dashboard') }}">Dashboard</a></li>

          </ul>
        </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">E-LOG BOOK</span></a>
          <ul aria-expanded="false" class="collapse">
            <li><a href="{{ route ('formpots.index') }}">POTS </a></li>
            <li><a href="{{ route ('formgw.index') }}">GIANT WALL</a></li>
            <li><a href="{{ route ('formwifi.index') }}">WIFI 13 BANDARA</a></li>
            <li><a href="#">SELF CHECKIN KIOS K</a></li>
            <li><a href="#">SEAT MANAGEMENT</a></li>
          </ul>
        </li>
        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">PROJECT</span></a>
          <ul aria-expanded="false" class="collapse">
            <li><a href="{{ route('forminput') }}">TRADING</a></li>
            <li><a href="{{ route ('sewa') }}">SEWA</a></li>
          </ul>
        </li>


        <li class="nav-small-cap">--- Master Data ---</li>
        <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Master Data</span></a>
          <ul aria-expanded="false" class="collapse">
            <li><a href="{{ route('master-roles.index') }}">Roles</a></li>
            <li><a href="{{ route('master-permission.index') }}">Permission</a></li>
          </ul>
        </li>
        <li>
          <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
            <i class="ti-settings"></i>
            <span class="hide-menu">Akses</span>
          </a>
          <ul aria-expanded="false" class="collapse">
            <li><a href="{{ route('access-role.index') }}">Roles</a></li>
            <li><a href="{{ route('access-permission.index') }}">Permission</a></li>
          </ul>
        </li>

      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
