<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <span class="brand-text font-weight-light pl-4"><strong>{{Auth::user()->name}}</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if(!empty(Auth::user()->image))
          <img src="{{asset(Auth::user()->image)}}" class="img-circle elevation-2" alt="User Image">
          @else
          <img src="{{asset('front/logo.jpeg')}}" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>
    @php

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        {
          $link = "https";
        }
        else
        {
          $link = "http";

          // Here append the common URL characters.
          $link .= "://";

          // Append the host(domain name, ip) to the URL.
          $link .= $_SERVER['HTTP_HOST'];

          // Append the requested resource location to the URL
          $link .= $_SERVER['REQUEST_URI'];
        }

    @endphp
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('home')}}" class="nav-link {{ $link == route('home') ? 'active':'' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                  Tableau de bord
              </p>
            </a>
          </li>
            @if(Auth::user()->role == 1)
                <li class="nav-item">
                    <a href="{{route('generalsettings.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            Réglages généraux
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('website.content')}}" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            Mamikook concept
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.company.contacts')}}" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            Creez votre cantine digitale
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.mamikkok')}}" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            Mamikook à la maison
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.bureau')}}" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            Epicerie au bureau
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.contacts')}}" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            Requêtes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.meals')}}" class="nav-link">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>
                            Repas
                        </p>
                    </a>
                </li>
            @else
            @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
