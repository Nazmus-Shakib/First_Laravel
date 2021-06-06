@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
@endphp
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          @if(Auth::user()->usertype=="Admin")
          <li class="nav-item {{( $prefix=='/users' ? 'menu-open' : '' )}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('users.view')}}" class="nav-link {{( $route=='users.view' ? 'active' : '' )}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View User</p>
                </a>
              </li>
            </ul>
          </li>
          @endif

          <li class="nav-item {{( $prefix=='/profiles' ? 'menu-open' : '' )}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('profiles.view')}}" class="nav-link {{( $route=='profiles.view' ? 'active' : '' )}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('profiles.password.view')}}" class="nav-link {{( $route=='profiles.password.view' ? 'active' : '' )}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{( $prefix=='/logos' ? 'menu-open' : '' )}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Logo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('logos.view')}}" class="nav-link {{( $route=='logos.view' ? 'active' : '' )}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Logo</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{( $prefix=='/sliders' ? 'menu-open' : '' )}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Slider
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sliders.view')}}" class="nav-link {{( $route=='sliders.view' ? 'active' : '' )}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Slider</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{( $prefix=='/missions' ? 'menu-open' : '' )}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Mission
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('missions.view')}}" class="nav-link {{( $route=='missions.view' ? 'active' : '' )}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Mission</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{( $prefix=='/news_events' ? 'menu-open' : '' )}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage News & Events
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('news_events.view')}}" class="nav-link {{( $route=='news_events.view' ? 'active' : '' )}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View News & Events</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{( $prefix=='/services' ? 'menu-open' : '' )}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Service
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('services.view')}}" class="nav-link {{( $route=='services.view' ? 'active' : '' )}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Service</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{( $prefix=='/contacts' ? 'menu-open' : '' )}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Contact
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('contacts.view')}}" class="nav-link {{( $route=='contacts.view' ? 'active' : '' )}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Contact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('communicate.view')}}" class="nav-link {{( $route=='communicate.view' ? 'active' : '' )}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Communicate</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item {{( $prefix=='/abouts' ? 'menu-open' : '' )}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage About
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('abouts.view')}}" class="nav-link {{( $route=='abouts.view' ? 'active' : '' )}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View About</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->