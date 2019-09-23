<aside class="app-sidebar">
        {{-- logo --}}
        {{-- <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
          <div>
            <p class="app-sidebar__user-name">John Doe</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
          </div>
        </div> --}}
        <ul class="app-menu">
            <li>
                <a class="app-menu__item @if ($title == "dashboard") active @endif " href="{{route('show_dashboard_page')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
            </li>
            <li>
                <a class="app-menu__item @if ($title == "users") active @endif" href="{{route('show_dashboard_user_page')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label"> Users</span></a>
            </li>
            <li>
                <a class="app-menu__item @if ($title == "index") active @endif" href="{{route('show_dashboard_index_page')}}"><i class="app-menu__icon fa fa-television"></i><span class="app-menu__label"> Index</span></a>
            </li>
            <li>
                <a class="app-menu__item @if ($title == "projects") active @endif " href="{{route('show_dashboard_project_page')}}"><i class="app-menu__icon fa fa-briefcase"></i><span class="app-menu__label">Projects</span></a>
            </li>
            <li>
                <a class="app-menu__item @if ($title == "services") active @endif " href="{{route('show_dashboard_service_page')}}"><i class="app-menu__icon fa fa-lightbulb-o"></i><span class="app-menu__label">Services</span></a>
            </li>
            <li>
                <a class="app-menu__item @if ($title == "testimonies") active @endif " href="{{route('show_dashboard_testimony_page')}}"><i class="app-menu__icon fa fa-comments"></i><span class="app-menu__label">Testimonies</span></a>
            </li>
            <li>
                <a class="app-menu__item @if ($title == "form") active @endif " href="{{route('form_valid')}}"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Form</span></a>
            </li>
            {{-- <li class="treeview">
                <a class="app-menu__item " href="#" data-toggle="treeview">
                    <i class="app-menu__icon fa fa-files-o"></i>
                    <span class="app-menu__label">Pages</span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item @if ($title == "index") active @endif" href="{{route('show_dashboard_index_page')}}"><i class="icon fa fa-television"></i> Index</a></li>
                    <li><a class="treeview-item @if ($title == "about") active @endif" href="{{route('show_dashboard_about_page')}}"><i class="icon fa fa-address-card"></i> About</a></li>
                    <li><a class="treeview-item @if ($title == "work") active @endif" href="{{route('show_dashboard_work_page')}}"><i class="icon fa fa-briefcase"></i> Works</a></li>
                </ul>
            </li> --}}
            {{-- <li>
                <a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a>
            </li> --}}
            {{-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="table-basic.html"><i class="icon fa fa-circle-o"></i> Basic Tables</a></li>
                    <li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>
                </ul>
            </li>
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="blank-page.html"><i class="icon fa fa-circle-o"></i> Blank Page</a></li>
                    <li><a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> Login Page</a></li>
                    <li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a></li>
                    <li><a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> User Page</a></li>
                    <li><a class="treeview-item" href="page-invoice.html"><i class="icon fa fa-circle-o"></i> Invoice Page</a></li>
                    <li><a class="treeview-item" href="page-calendar.html"><i class="icon fa fa-circle-o"></i> Calendar Page</a></li>
                    <li><a class="treeview-item" href="page-mailbox.html"><i class="icon fa fa-circle-o"></i> Mailbox</a></li>
                    <li><a class="treeview-item" href="page-error.html"><i class="icon fa fa-circle-o"></i> Error Page</a></li>
                </ul>
            </li> --}}
        </ul>
      </aside>
